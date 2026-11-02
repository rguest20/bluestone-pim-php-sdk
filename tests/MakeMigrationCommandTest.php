<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Command\MakeMigrationCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

final class MakeMigrationCommandTest extends TestCase
{
    public function testGeneratedMigrationHasValidPhpAndCannotSilentlyApplyAnEmptyStub(): void
    {
        $directory = sys_get_temp_dir().'/pim-generator-'.bin2hex(random_bytes(8));
        try {
            $tester = new CommandTester(new MakeMigrationCommand($directory));
            self::assertSame(0, $tester->execute(['description' => "Rename O'Reilly category\nwith a new name"]));
            $files = glob($directory.'/src/Migration/*.php');
            self::assertCount(1, $files);
            $source = file_get_contents($files[0]);
            self::assertNotEmpty(token_get_all($source, TOKEN_PARSE));
            self::assertStringContainsString('namespace App\\Migration;', $source);
            self::assertStringContainsString('implements MigrationInterface', $source);
            self::assertStringContainsString('private readonly ApiOperationRunner $api', $source);
            self::assertStringContainsString('throw new \\LogicException', $source);
            self::assertStringNotContainsString('CLASS_NAME', $source);
        } finally {
            foreach (glob($directory.'/src/Migration/*') as $file) {
                unlink($file);
            }
            rmdir($directory.'/src/Migration');
            rmdir($directory.'/src');
            rmdir($directory);
        }
    }
}
