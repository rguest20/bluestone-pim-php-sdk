<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\QueryBuilderOperations;

final class QueryBuilderConnector extends AbstractConnector
{
    use QueryBuilderOperations;

    public const COMPONENT = 'query-builder';
}
