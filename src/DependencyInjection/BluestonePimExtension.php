<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Youwe\BluestonePim\Migration\MigrationInterface;

final class BluestonePimExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $container->registerForAutoconfiguration(MigrationInterface::class)
            ->addTag('youwe.bluestone_pim.migration');

        $sdkRoot = dirname(__DIR__, 2);
        $container->setParameter('youwe_bluestone_pim.sdk_root', $sdkRoot);
        $container->setParameter('youwe_bluestone_pim.resources_dir', $sdkRoot.'/resources/bluestone');
        $container->setParameter('youwe_bluestone_pim.empty', '');
        $container->setParameter('youwe_bluestone_pim.default_api_base_url', 'https://api.test.bluestonepim.com');
        $container->setParameter('youwe_bluestone_pim.default_token_url', 'https://idp.test.bluestonepim.com/op/token');
        $container->setParameter('youwe_bluestone_pim.default_migrations_database_url', 'sqlite:///%kernel.project_dir%/var/bluestone-migrations.db');

        $loader = new YamlFileLoader($container, new FileLocator($sdkRoot.'/src/Resources/config'));
        $loader->load('services.yaml');
    }
}
