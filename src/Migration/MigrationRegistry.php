<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Migration;

final class MigrationRegistry
{
    /** @var array<string, MigrationDefinition> */
    private array $definitions = [];

    /** @param iterable<MigrationInterface> $migrations */
    public function __construct(iterable $migrations)
    {
        foreach ($migrations as $migration) {
            $reflection = new \ReflectionClass($migration);
            if (!preg_match('/^Version([0-9]{14})$/', $reflection->getShortName(), $matches)) {
                throw new \InvalidArgumentException('Migration classes must be named VersionYYYYMMDDHHMMSS.');
            }
            $version = $matches[1];
            if (isset($this->definitions[$version])) {
                throw new \InvalidArgumentException('Duplicate migration version: '.$version);
            }
            $source = file_get_contents($reflection->getFileName());
            if (!is_string($source)) {
                throw new \RuntimeException('Cannot read migration source file: '.$reflection->getFileName());
            }
            [$checksum, $legacyChecksum] = self::checksums($source);
            $this->definitions[$version] = new MigrationDefinition($version, $checksum, $migration, $legacyChecksum);
        }
        ksort($this->definitions, SORT_STRING);
    }

    /** @return array{string, string} Canonical executable-code checksum and legacy raw-file checksum. */
    private static function checksums(string $source): array
    {
        $legacyChecksum = hash('sha256', $source);
        $tokens = token_get_all($source, TOKEN_PARSE);
        foreach ($tokens as $token) {
            if (is_array($token) && in_array($token[0], [T_LINE, T_HALT_COMPILER], true)) {
                // These constructs observe source layout or byte offsets, so whitespace can change behavior.
                return [$legacyChecksum, $legacyChecksum];
            }
        }

        $canonical = "bluestone-migration-php-v1\0";
        foreach ($tokens as $token) {
            if (is_array($token)) {
                [$id, $text] = $token;
                if (in_array($id, [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT], true)) {
                    continue;
                }
                if (in_array($id, [T_OPEN_TAG, T_CLOSE_TAG], true)) {
                    $canonical .= 'token:'.$id.';';
                    continue;
                }
                $canonical .= 'token:'.$id.':'.strlen($text).':'.$text.';';
                continue;
            }
            $canonical .= 'char:'.$token.';';
        }

        return [hash('sha256', $canonical), $legacyChecksum];
    }

    /** @return array<string, MigrationDefinition> */
    public function all(): array
    {
        return $this->definitions;
    }
}
