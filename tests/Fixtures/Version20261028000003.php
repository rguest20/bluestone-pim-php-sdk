<?php

declare(strict_types=1);

namespace App\Tests\Fixtures;

use App\Api\Connector\PimConnector;
use App\Migration\MigrationContext;
use App\Migration\MigrationInterface;

final class Version20261028000003 implements MigrationInterface
{
    public bool $shouldFail = true;
    public array $observedRevisions = [];

    public function __construct(private readonly PimConnector $pim)
    {
    }

    public function description(): string
    {
        return 'Verify a retry retains its original API contract';
    }

    public function up(MigrationContext $context): void
    {
        $this->observedRevisions[] = $context->apiRevision();
        $this->pim->execute('historicalOperation');
        if ($this->shouldFail) {
            throw new \RuntimeException('Interrupted after the remote operation.');
        }
    }
}
