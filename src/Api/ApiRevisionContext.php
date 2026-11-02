<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

/** Per-migration API specification snapshot selected by the migration ledger. */
final class ApiRevisionContext
{
    private ?string $revision = null;
    private ?string $migrationVersion = null;

    public function current(): ?string
    {
        return $this->revision;
    }

    public function migrationVersion(): ?string
    {
        return $this->migrationVersion;
    }

    public function select(?string $revision, ?string $migrationVersion = null): void
    {
        if ($revision !== null && $revision !== '' && $revision !== 'legacy' && !preg_match('/^[a-f0-9]{16}$/', $revision)) {
            throw new \InvalidArgumentException('Invalid migration specification revision.');
        }
        $this->revision = $revision;
        $this->migrationVersion = $revision === null ? null : $migrationVersion;
    }
}
