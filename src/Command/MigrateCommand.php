<?php

declare(strict_types=1);

namespace App\Command;

use App\Service\MigrationRunner;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:migrations:migrate', description: 'Run pending Bluestone API migrations in version order.')]
final class MigrateCommand extends Command
{
    public function __construct(private readonly MigrationRunner $runner)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('dry-run', null, InputOption::VALUE_NONE, 'Show the plan without running migration code or calling the API.')
            ->addOption('retry', null, InputOption::VALUE_NONE, 'Resume a failed/interrupted migration, skipping its completed steps.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        if ($input->getOption('dry-run')) {
            $rows = array_map(static fn (array $row): array => [$row['version'], $row['status'], $row['description']], $this->runner->plan());
            $io->table(['Version', 'Status', 'Description'], $rows);
            $io->note('Plan only: migration code and API requests were not executed.');

            return Command::SUCCESS;
        }
        $count = $this->runner->run((bool) $input->getOption('retry'), static fn (string $message) => $io->writeln($message));
        $io->success(sprintf('Applied %d migration(s).', $count));

        return Command::SUCCESS;
    }
}
