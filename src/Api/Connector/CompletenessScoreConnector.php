<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Youwe\BluestonePim\Generated\ConnectorOperations\CompletenessScoreOperations;

final class CompletenessScoreConnector extends AbstractConnector
{
    use CompletenessScoreOperations;

    public const COMPONENT = 'completeness-score';
}
