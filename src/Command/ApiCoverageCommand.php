<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Command;

use Youwe\BluestonePim\Api\OperationCatalog;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:api:coverage', description: 'Report routing, typed-contract, workflow and live verification status.')]
final class ApiCoverageCommand extends Command
{
    public function __construct(private readonly OperationCatalog $catalog)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('component', InputArgument::OPTIONAL, 'Limit the report to one API component.')
            ->addOption('json', null, InputOption::VALUE_NONE, 'Emit the full machine-readable per-operation inventory.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $coverage = $this->catalog->coverage();
        $component = $input->getArgument('component');
        if ($component !== null) {
            if (!isset($coverage['components'][$component])) {
                throw new \InvalidArgumentException('Unknown API component: '.$component);
            }
            $coverage['components'] = [$component => $coverage['components'][$component]];
            $coverage['operations'] = array_filter($coverage['operations'], static fn (array $row): bool => $row['component'] === $component);
        }
        if ($input->getOption('json')) {
            $output->writeln(json_encode($coverage, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));

            return Command::SUCCESS;
        }
        $io = new SymfonyStyle($input, $output);
        $rows = [];
        foreach ($coverage['components'] as $name => $data) {
            $counts = $data['counts'];
            $rows[] = [$name, $counts['routed'], $counts['adapter_generated'], $counts['schema_gaps'], $counts['typed'], $counts['fixture_verified'],
                $counts['workflow_verified'], $counts['live_verified'], $counts['deprecated'], $counts['stale'] ?? 0, $counts['skipped'] ?? 0, $counts['blocked'] ?? 0];
        }
        $io->table(['Component', 'Routed', 'Adapters', 'Schema gaps', 'Typed contract', 'Fixture verified', 'Workflow verified', 'Live verified', 'Deprecated', 'Stale', 'Skipped', 'Blocked'], $rows);
        $io->writeln('Specification revision: '.$coverage['revision']);
        $io->note('Routing availability reflects the local snapshot. Missing and unverified statuses are tracked per operation; they are not counted as verified.');
        if (($coverage['live_verification_prerequisites']['status'] ?? null) === 'blocked') {
            $io->note('Live verification blocked: '.$coverage['live_verification_prerequisites']['reason']);
        }

        return Command::SUCCESS;
    }
}
