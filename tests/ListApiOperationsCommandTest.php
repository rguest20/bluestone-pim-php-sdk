<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\OperationCatalog;
use App\Command\ListApiOperationsCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

final class ListApiOperationsCommandTest extends TestCase
{
    public function testDiscoveryWorksOfflineAndFiltersComponentOperationsByTag(): void
    {
        $tester = new CommandTester(new ListApiOperationsCommand(new OperationCatalog(dirname(__DIR__).'/resources/bluestone')));
        self::assertSame(0, $tester->execute([]));
        self::assertStringContainsString('public-api-sync', $tester->getDisplay());
        self::assertStringContainsString('bulk-operations', $tester->getDisplay());
        self::assertSame(0, $tester->execute(['component' => 'media-bank', '--tag' => 'Upload']));
        self::assertStringContainsString('createAsset', $tester->getDisplay());
        self::assertStringNotContainsString('removeListOfAssets', $tester->getDisplay());
    }
}
