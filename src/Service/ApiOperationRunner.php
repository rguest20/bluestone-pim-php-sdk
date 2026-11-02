<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\ApiAuthentication;
use Youwe\BluestonePim\Api\BluestoneApiException;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Shared runner for documented API operations, with migration lease refresh when called in a migration. */
final class ApiOperationRunner
{
    private const MAX_ATTEMPTS = 3;
    private const MAX_RETRY_DELAY = 30;

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

        $method = strtoupper($method);
        for ($attempt = 1; ; ++$attempt) {
            try {
                $response = $this->client->request($method, $path, $options, $authentication);
                $this->lock->refreshIfHeld();

                return $response;
            } catch (BluestoneApiException $error) {
                $retryable = $error->statusCode === 429
                    || (in_array($error->statusCode, [502, 503, 504], true) && in_array($method, ['GET', 'PUT'], true));
                $delay = $retryable && $attempt < self::MAX_ATTEMPTS ? $this->retryDelay($error, $attempt) : null;
                if ($delay === null) {
                    throw $error;
                }
                usleep((int) ceil($delay * 1_000_000));
                $this->lock->refreshIfHeld();
            }
        }
    }

    private function retryDelay(BluestoneApiException $error, int $attempt): ?float
    {
        $backoff = (float) min(2 ** ($attempt - 1), self::MAX_RETRY_DELAY);
        $retryAfter = trim((string) $error->retryAfter);
        if ($retryAfter === '') {
            return $backoff;
        }
        if (ctype_digit($retryAfter)) {
            $delay = (float) $retryAfter;
        } else {
            $timestamp = strtotime($retryAfter);
            $delay = $timestamp === false ? $backoff : (float) max(0, $timestamp - time());
        }

        // Never retry before a longer server-requested delay; leave the request safely retryable instead.
        return $delay > self::MAX_RETRY_DELAY ? null : $delay;
    }
}
