<?php

declare(strict_types=1);

use Doctrine\DBAL\DriverManager;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\OpenApiContractValidator;
use Youwe\BluestonePim\Api\OpenApiModelSerializer;
use Youwe\BluestonePim\Api\OperationCatalog;
use Youwe\BluestonePim\Api\Connector\PublicApiConnector;
use Youwe\BluestonePim\Api\TypedApiAdapterFactory;
use Youwe\BluestonePim\BluestonePimBundle;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Service\ApiOperationRunner;

require __DIR__.'/vendor/autoload.php';

if (class_exists('App\\Api\\BluestoneClient')) {
    throw new RuntimeException('The SDK must not expose or require the host App namespace.');
}

$container = new ContainerBuilder();
$container->setParameter('kernel.project_dir', __DIR__);
$extension = (new BluestonePimBundle())->getContainerExtension();
$extension->load([], $container);
$loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/config'));
$loader->load('services.yaml');
if (!$container->hasDefinition(Youwe\BluestonePim\Command\MigrateCommand::class)
    || !$container->hasDefinition(Youwe\BluestonePim\Command\StatusCommand::class)
    || !$container->hasDefinition(Youwe\BluestonePim\Command\MakeMigrationCommand::class)) {
    throw new RuntimeException('The package bundle did not register its migration commands.');
}
if (!$container->hasDefinition(App\Migration\Version20261102000001::class)) {
    throw new RuntimeException('The consumer migration service was not discovered.');
}
$container->compile();
if (!$container->hasParameter('youwe_bluestone_pim.resources_dir')
    || !str_starts_with($container->getParameter('youwe_bluestone_pim.resources_dir'), dirname((new ReflectionClass(OperationCatalog::class))->getFileName(), 3))) {
    throw new RuntimeException('The installed Symfony bundle did not resolve resources from the SDK package.');
}
$migrationDefinition = $container->getDefinition(App\Migration\Version20261102000001::class);
if (!$migrationDefinition->hasTag('youwe.bluestone_pim.migration')) {
    throw new RuntimeException('Consumer migration services were not tagged automatically.');
}

$sdkRoot = dirname((new ReflectionClass(OperationCatalog::class))->getFileName(), 3);
$catalog = new OperationCatalog($sdkRoot.'/resources/bluestone');
$revision = $catalog->activeRevision();
if ($revision === null) {
    throw new RuntimeException('The installed package has no active pinned API revision.');
}
$manifestFile = $sdkRoot.'/generated/R'.$revision.'/manifest.json';
$manifest = json_decode(file_get_contents($manifestFile), true, 512, JSON_THROW_ON_ERROR);
if (($manifest['revision'] ?? null) !== $revision || !isset($manifest['components']['public-api'])) {
    throw new RuntimeException('Generated contracts do not match the installed OpenAPI revision.');
}

$connection = DriverManager::getConnection(['driver' => 'pdo_sqlite', 'memory' => true]);
$lock = new MigrationLock($connection);
$lock->acquire();
try {
    $http = new MockHttpClient([new MockResponse('', ['http_code' => 204])]);
    $revisionContext = new ApiRevisionContext();
    $runner = new ApiOperationRunner(new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/token', 'consumer', 'secret'), $lock, null, $revisionContext);
    $connector = new PublicApiConnector($runner, $catalog, $revisionContext, new OpenApiContractValidator());
    $factory = new TypedApiAdapterFactory([$connector], new OpenApiModelSerializer($catalog, $revisionContext), $revisionContext, $catalog, $sdkRoot);
    $factory->forComponent('public-api')->GetHealth();
    if ($http->getRequestsCount() !== 1) {
        throw new RuntimeException('Expected exactly one mocked typed API request.');
    }
} finally {
    $lock->release();
    $connection->close();
}

fwrite(STDOUT, sprintf("Composer consumer verified typed public-api call using pinned revision %s.\n", $revision));
