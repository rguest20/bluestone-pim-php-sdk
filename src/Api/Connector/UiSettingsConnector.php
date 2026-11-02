<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\UiSettingsOperations;

final class UiSettingsConnector extends AbstractConnector
{
    use UiSettingsOperations;

    public const COMPONENT = 'ui-settings';
}
