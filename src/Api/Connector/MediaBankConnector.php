<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Symfony\Contracts\HttpClient\ResponseInterface;
use Youwe\BluestonePim\Generated\ConnectorOperations\MediaBankOperations;

final class MediaBankConnector extends AbstractConnector
{
    use MediaBankOperations;

    public const COMPONENT = 'media-bank';

    public function createAsset(array $request, string $context = 'en'): ResponseInterface
    {
        return $this->executeTyped('createAsset', [], [
            'headers' => ['context' => $context],
            'json' => $request,
        ]);
    }

    public function completeAsset(string $assetId, string $context = 'en'): ResponseInterface
    {
        return $this->executeTyped('completeAsset', ['id' => $assetId], [
            'headers' => ['context' => $context],
        ]);
    }
}
