<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Command;

use Youwe\BluestonePim\Api\AsyncOperationInventory;
use Youwe\BluestonePim\Api\OperationCatalog;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:api:async-inventory', description: 'Find API operations that may use asynchronous workflows.')]
final class AsyncOperationInventoryCommand extends Command
{
    public function __construct(private readonly OperationCatalog $catalog, private readonly AsyncOperationInventory $inventory)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('json', null, InputOption::VALUE_NONE, 'Emit the machine-readable component inventory.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $revision = $this->catalog->activeRevision();
        if ($revision === null) {
            throw new \RuntimeException('A full pinned OpenAPI revision is required. Run php bin/update-api-catalog.');
        }
        $result = ['revision' => $revision, 'components' => []];
        foreach (array_keys(OperationCatalog::COMPONENTS) as $component) {
            $spec = json_decode(file_get_contents($this->catalog->openApiPath($component, $revision)), true, 512, JSON_THROW_ON_ERROR);
            $componentCatalog = $this->catalog->component($component, $revision);
            $componentCatalog['component'] = $component;
            $result['components'][$component] = $this->inventory->discover($spec, $componentCatalog);
        }
        if ($input->getOption('json')) {
            $output->writeln(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));

            return Command::SUCCESS;
        }
        $io = new SymfonyStyle($input, $output);
        $rows = [];
        $gaps = 0;
        foreach ($result['components'] as $component => $operations) {
            foreach ($operations as $operation) {
                if ($operation['status'] === 'review_required') ++$gaps;
                $rows[] = [$component, $operation['operation_id'], $operation['method'], $operation['path'], implode(', ', $operation['signals']), $operation['status'], $operation['protocol'] ?? $operation['reason']];
            }
        }
        $io->table(['Component', 'Operation', 'Method', 'Path', 'Specification signals', 'Assessment', 'Protocol or remaining gap'], $rows);
        $io->note(sprintf('%d operation(s) have a supported poller; %d candidate(s) still need protocol review. OpenAPI signals are not proof that polling is required.', count($rows) - $gaps, $gaps));
        $io->writeln('Specification revision: '.$revision);

        return Command::SUCCESS;
    }
}
