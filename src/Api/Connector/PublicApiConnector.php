<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\PublicApiOperations;

final class PublicApiConnector extends AbstractConnector
{
    use PublicApiOperations;

    public const COMPONENT = 'public-api';
}
