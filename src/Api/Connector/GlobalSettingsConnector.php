<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\GlobalSettingsOperations;

final class GlobalSettingsConnector extends AbstractConnector
{
    use GlobalSettingsOperations;

    public const COMPONENT = 'global-settings';
}
