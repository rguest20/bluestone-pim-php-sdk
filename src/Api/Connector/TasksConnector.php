<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\TasksOperations;

final class TasksConnector extends AbstractConnector
{
    use TasksOperations;

    public const COMPONENT = 'tasks';
}
