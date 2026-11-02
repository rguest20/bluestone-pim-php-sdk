<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\SearchOperations;

final class SearchConnector extends AbstractConnector
{
    use SearchOperations;

    public const COMPONENT = 'search';
}
