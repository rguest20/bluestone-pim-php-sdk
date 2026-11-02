<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Migration\MigrationStorage;

#[AsCommand(name: 'app:migrations:install', description: 'Create the database tables that track Bluestone migration deployments.')]
final class InstallTrackingCommand extends Command
{
    public function __construct(private readonly MigrationStorage $storage, private readonly MigrationLock $lock)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $this->lock->acquire();
        try {
            $this->storage->initialize();
            $this->storage->assertTarget(true);
        } finally {
            $this->lock->release();
        }

        $io->success('Migration tracking tables are ready and bound to the configured Bluestone target.');

        return Command::SUCCESS;
    }
}
