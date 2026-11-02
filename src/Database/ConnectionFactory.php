<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Tools\DsnParser;

final class ConnectionFactory
{
    public static function create(string $url): Connection
    {
        $params = (new DsnParser([
            'sqlite' => 'pdo_sqlite',
            'mysql' => 'pdo_mysql',
            'postgresql' => 'pdo_pgsql',
            'postgres' => 'pdo_pgsql',
        ]))->parse($url);

        if (($params['driver'] ?? null) === 'pdo_sqlite' && isset($params['path']) && $params['path'] !== ':memory:') {
            $directory = dirname($params['path']);
            if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                throw new \RuntimeException('Cannot create the SQLite database directory.');
            }
        }

        return DriverManager::getConnection($params);
    }
}
