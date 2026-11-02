<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\PublicApiSyncOperations;

final class PublicApiSyncConnector extends AbstractConnector
{
    use PublicApiSyncOperations;

    public const COMPONENT = 'public-api-sync';
}
