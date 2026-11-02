<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\MetadataOperations;

final class MetadataConnector extends AbstractConnector
{
    use MetadataOperations;

    public const COMPONENT = 'metadata';
}
