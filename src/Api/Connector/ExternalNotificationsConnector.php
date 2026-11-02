<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\ExternalNotificationsOperations;

final class ExternalNotificationsConnector extends AbstractConnector
{
    use ExternalNotificationsOperations;

    public const COMPONENT = 'external-notifications';
}
