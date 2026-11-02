<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\ApiAuthentication;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Shared runner for documented API operations, with migration lease refresh when called in a migration. */
final class ApiOperationRunner
{
    public function __construct(private readonly BluestoneClient $client, private readonly MigrationLock $lock,
        private readonly ?MigrationStorage $storage = null, private readonly ?ApiRevisionContext $revisionContext = null)
    {
    }

    public function run(string $method, string $path, array $options = [], ApiAuthentication $authentication = ApiAuthentication::OAuth2,
        ?string $component = null, ?string $operationId = null): ResponseInterface
    {
        $this->lock->refreshIfHeld();
        $version = $this->revisionContext?->migrationVersion();
        if ($version !== null && $component !== null && $operationId !== null) {
            $revision = $this->revisionContext?->current();
            $this->storage?->recordOperation($version, $component, $operationId, $revision === null || $revision === '' ? 'legacy' : $revision);
        }
        $response = $this->client->request($method, $path, $options, $authentication);
        $this->lock->refreshIfHeld();

        return $response;
    }
}
