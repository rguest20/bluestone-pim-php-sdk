<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:migrations:make', description: 'Generate an autowired Bluestone API migration service.')]
final class MakeMigrationCommand extends Command
{
    public function __construct(private readonly string $projectDir)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('description', InputArgument::REQUIRED, 'What this migration changes.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $class = 'Version'.gmdate('YmdHis');
        $path = $this->projectDir.'/migrations/'.$class.'.php';
        $description = var_export((string) $input->getArgument('description'), true);
        $template = <<<'PHP'
<?php

declare(strict_types=1);

namespace BluestoneMigrations;

use App\Migration\MigrationContext;
use App\Migration\MigrationInterface;
use App\Service\ApiOperationRunner;

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
            $content = str_replace(['CLASS_NAME', 'DESCRIPTION'], [$class, $description], $template)."\n";
            if (fwrite($handle, $content) !== strlen($content)) {
                throw new \RuntimeException('Could not write the complete migration file.');
            }
        } finally {
            fclose($handle);
        }
        (new SymfonyStyle($input, $output))->success('Created migrations/'.$class.'.php');

        return Command::SUCCESS;
    }
}
