<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\LabelsOperations;

final class LabelsConnector extends AbstractConnector
{
    use LabelsOperations;

    public const COMPONENT = 'labels';
}
