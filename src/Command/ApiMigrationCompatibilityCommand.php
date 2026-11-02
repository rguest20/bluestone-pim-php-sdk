<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Command;

use Youwe\BluestonePim\Api\OperationCatalog;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:api:migration-compatibility', description: 'Find unfinished migrations that used operations removed from the active API spec.')]
final class ApiMigrationCompatibilityCommand extends Command
{
    public function __construct(private readonly MigrationStorage $storage, private readonly OperationCatalog $catalog)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('json', null, InputOption::VALUE_NONE, 'Emit findings as JSON.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $activeRevision = $this->catalog->activeRevision();
        if ($activeRevision === null) {
            throw new \RuntimeException('A full pinned OpenAPI revision is required. Run php bin/update-api-catalog.');
        }
        $trackingAvailable = $this->storage->operationTrackingAvailable();
        $findings = [];
        foreach ($trackingAvailable ? $this->storage->operationsInUnfinishedMigrations() : [] as $used) {
            $current = $this->catalog->component($used['component'], $activeRevision);
            if (!isset($current['operations'][$used['operation_id']])) {
                $findings[] = $used + ['active_revision' => $activeRevision];
            }
        }
        if ($input->getOption('json')) {
            $output->writeln(json_encode(['active_revision' => $activeRevision, 'tracking_available' => $trackingAvailable, 'findings' => $findings], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));

            return $trackingAvailable && $findings === [] ? Command::SUCCESS : Command::FAILURE;
        }
        $io = new SymfonyStyle($input, $output);
        $io->table(['Migration', 'Status', 'Component', 'Removed operation', 'Pinned revision', 'Active revision'], array_map(
            static fn (array $row): array => [$row['version'], $row['status'], $row['component'], $row['operation_id'], $row['revision'], $row['active_revision']], $findings));
        if (!$trackingAvailable) {
            $io->warning('This database predates operation tracking, so unfinished migration compatibility cannot be determined. Run migrations to initialize tracking, then review this database manually.');
        } elseif ($findings === []) {
            $io->success('No operations used by unfinished migrations are missing from the active specification.');
        } else {
            $io->warning('These unfinished migrations remain pinned to their stored revision. Review their retry plan; applied migrations were not included.');
        }

        return $trackingAvailable && $findings === [] ? Command::SUCCESS : Command::FAILURE;
    }
}
