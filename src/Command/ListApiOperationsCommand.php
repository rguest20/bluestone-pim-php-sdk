<?php

declare(strict_types=1);

namespace App\Command;

use App\Api\OperationCatalog;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:api:list', description: 'List locally documented Bluestone components or their operation IDs; no API calls.')]
final class ListApiOperationsCommand extends Command
{
    public function __construct(private readonly OperationCatalog $catalog)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('component', InputArgument::OPTIONAL, 'Component such as pim, metadata or public-api.')
            ->addOption('tag', null, InputOption::VALUE_REQUIRED, 'Filter operations by their exact OpenAPI tag.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $component = $input->getArgument('component');
        $rows = [];
        if ($component === null) {
            foreach (array_keys(OperationCatalog::COMPONENTS) as $name) {
                $data = $this->catalog->component($name);
                $rows[] = [$name, $data['title'], count($data['operations'])];
            }
            $io->table(['Component', 'Title', 'Operations'], $rows);
            if (($revision = $this->catalog->activeRevision()) !== null) {
                $io->writeln('Specification revision: '.$revision);
            }
            if (($revision = $this->catalog->activeRevision()) !== null) {
                $io->writeln('Specification revision: '.$revision);
            }
        } else {
            foreach ($this->catalog->component($component)['operations'] as $id => $operation) {
                if ($input->getOption('tag') !== null && !in_array($input->getOption('tag'), $operation['tags'], true)) {
                    continue;
                }
                $rows[] = [$id, $operation['method'], $operation['path'], $operation['authentication'],
                    $operation['deprecated'] ? 'yes' : '', implode(', ', $operation['tags'])];
            }
            $io->table(['Operation ID', 'Method', 'Path', 'Auth', 'Deprecated', 'Tags'], $rows);
        }

        return Command::SUCCESS;
    }
}
