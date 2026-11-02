<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\IdpOperations;

final class IdpConnector extends AbstractConnector
{
    use IdpOperations;

    public const COMPONENT = 'idp';
}
