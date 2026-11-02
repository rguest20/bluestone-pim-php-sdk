<?php

declare(strict_types=1);

namespace App\Command;

use App\Service\MigrationRunner;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:migrations:status', description: 'Show database-backed Bluestone migration progress.')]
final class StatusCommand extends Command
{
    public function __construct(private readonly MigrationRunner $runner)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $rows = array_map(static fn (array $row): array => [$row['version'], $row['status'], $row['attempts'], $row['steps'], $row['contract_revision'] ?? 'legacy', $row['applied_at'], $row['description'], $row['error']], $this->runner->plan());
        $io->table(['Version', 'Status', 'Attempts', 'Completed steps', 'API spec revision', 'Applied (UTC)', 'Description', 'Last error type'], $rows);
        if ($rows === []) {
            $io->note('No migrations registered. Generate one with app:migrations:make.');
        }

        return Command::SUCCESS;
    }
}
