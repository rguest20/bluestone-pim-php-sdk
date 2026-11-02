<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:migrations:make', description: 'Generate an autowired Bluestone API migration service.')]
final class MakeMigrationCommand extends Command
{
    public function __construct(
        private readonly string $projectDir,
        private readonly string $migrationDirectory = 'src/Migration',
        private readonly string $migrationNamespace = 'App\\Migration',
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('description', InputArgument::REQUIRED, 'What this migration changes.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $class = 'Version'.gmdate('YmdHis');
        $relativeDirectory = trim($this->migrationDirectory, '/');
        $directory = $this->projectDir.'/'.$relativeDirectory;
        if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
            throw new \RuntimeException('Cannot create the migration directory: '.$relativeDirectory);
        }
        $path = $directory.'/'.$class.'.php';
        $description = var_export((string) $input->getArgument('description'), true);
        $template = <<<'PHP'
<?php

declare(strict_types=1);

namespace MIGRATION_NAMESPACE;

use Youwe\BluestonePim\Migration\MigrationContext;
use Youwe\BluestonePim\Migration\MigrationInterface;
use Youwe\BluestonePim\Service\ApiOperationRunner;

final class CLASS_NAME implements MigrationInterface
{
    public function __construct(private readonly ApiOperationRunner $api)
    {
    }

    public function description(): string
    {
        return DESCRIPTION;
    }

    public function up(MigrationContext $context): void
    {
        // Inject specialised runners here as needed. Use stable, named checkpoints:
        // $context->step('update-resource', function (): void {
        //     $this->api->run('PATCH', '/documented/service/path', ['json' => [...]]);
        // });
        // Remove this guard only after implementing the migration.
        throw new \LogicException('Implement this migration before running it.');
    }
}
PHP;
        $handle = @fopen($path, 'x');
        if ($handle === false) {
            throw new \RuntimeException('Cannot create migration. Check permissions or retry next second if a version already exists.');
        }
        try {
            $content = str_replace(['MIGRATION_NAMESPACE', 'CLASS_NAME', 'DESCRIPTION'], [$this->migrationNamespace, $class, $description], $template)."\n";
            if (fwrite($handle, $content) !== strlen($content)) {
                throw new \RuntimeException('Could not write the complete migration file.');
            }
        } finally {
            fclose($handle);
        }
        (new SymfonyStyle($input, $output))->success('Created '.$relativeDirectory.'/'.$class.'.php');

        return Command::SUCCESS;
    }
}
