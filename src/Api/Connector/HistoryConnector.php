<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\HistoryOperations;

final class HistoryConnector extends AbstractConnector
{
    use HistoryOperations;

    public const COMPONENT = 'history';
}
