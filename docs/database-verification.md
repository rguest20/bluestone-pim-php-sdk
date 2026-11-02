# Tracking database verification

Run `composer check:databases` to exercise SQLite, PostgreSQL 16 and MySQL 8.0 using private disposable databases. PostgreSQL and MySQL use locally cached Docker images (`postgres:16-alpine` and `mysql:8.0`); the command does not pull images or access Bluestone. It binds database ports to loopback only, chooses random ports and credentials, and removes its containers when finished.

The integration suite is excluded from `composer check`. A direct suite run requires `DATABASE_TEST_URL` and accepts only a database named `bluestone_migration_test_*`, so it cannot silently use the application ledger. An unset URL is a skip rather than evidence of success. The matrix runner rejects skipped or empty suites.

The eight cases cover repeatable schema initialization, failure/retry recovery after replacing the connection, persisted specification revisions, skipping applied work, exclusion between independent lease owners, expired-lease takeover, progress rejection after ownership loss, target binding, persistent operation history and error redaction, and a completed mutation result recovered after replacing the connection without resubmitting its callback.

On 2026-10-31 all eight cases and 41 assertions passed on each engine: SQLite 3.53.4, PostgreSQL 16.13 and MySQL 8.0.45. No cases were skipped. The [recorded report](evidence/database-matrix-2026-10-31.json) includes image identifiers and exact server versions. Runtime reports are written under `var/verification/`; test databases and temporary containers are removed.

This is tracking-database evidence. Live tenant verification remains blocked separately at the user's request.
