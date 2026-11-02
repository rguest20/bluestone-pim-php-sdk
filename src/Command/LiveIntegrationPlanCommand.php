<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Command;

use Youwe\BluestonePim\Api\LiveFixtureSelection;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:api:live-plan', description: 'Validate an explicit live-test scope without contacting Bluestone.')]
final class LiveIntegrationPlanCommand extends Command
{
    public function __construct(private readonly LiveFixtureSelection $selection)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('target', null, InputOption::VALUE_REQUIRED, 'Explicit Bluestone test target.')
            ->addOption('group', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'Reviewed fixture group. Repeat for multiple groups.')
            ->addOption('operation', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'Selected component:operationId. Repeat to select multiple operations.')
            ->addOption('allow-broad-effect', null, InputOption::VALUE_NONE, 'Explicitly opt in to an administrative broad-effect fixture group.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $plan = $this->selection->plan(
            $input->getOption('target'),
            $input->getOption('group'),
            $input->getOption('operation'),
            $input->getOption('allow-broad-effect'),
        );
        $output->writeln(json_encode($plan, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));
        $output->writeln('Plan only: this command makes no tenant requests.');

        return Command::SUCCESS;
    }
}
