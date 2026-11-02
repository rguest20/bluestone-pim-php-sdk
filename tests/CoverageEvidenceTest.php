<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\CoverageEvidence;
use App\Api\CoverageInventory;
use App\Api\OperationCatalog;
use PHPUnit\Framework\TestCase;

final class CoverageEvidenceTest extends TestCase
{
    public function testRoutingAndGeneratedMappingsNeverImplyFixtureOrLiveEvidence(): void
    {
        $coverage = $this->baseline();
        $coverage['operations']['pim:shared']['typed_contract'] = 'generated';
        $report = (new CoverageEvidence())->apply($coverage, [], ['pim' => 'new-checksum', 'bulk-operations' => 'new-checksum']);
        foreach ($report['operations'] as $row) {
            self::assertSame('missing', $row['fixtures']);
            self::assertSame('unverified', $row['live_verification']);
            self::assertNotEmpty($row['remaining_actions']['fixtures']);
        }
        self::assertSame(0, $report['components']['pim']['counts']['fixture_verified']);
        self::assertSame(0, $report['components']['pim']['counts']['live_verified']);
    }

    public function testEvidenceDoesNotCrossComponentOrChecksumBoundaries(): void
    {
        $record = $this->record('pim', 'current-revision', 'old-checksum', 'verified');
        $report = (new CoverageEvidence())->apply($this->baseline(), [$record], ['pim' => 'new-checksum', 'bulk-operations' => 'new-checksum']);
        self::assertSame('stale', $report['operations']['pim:shared']['fixtures']);
        self::assertSame('missing', $report['operations']['bulk-operations:shared']['fixtures']);
        self::assertSame(0, $report['components']['pim']['counts']['fixture_verified']);
        self::assertSame(1, $report['components']['pim']['counts']['stale']);
        self::assertStringContainsString('Revalidate', $report['operations']['pim:shared']['remaining_actions']['fixtures']);
    }

    public function testOldRevisionEvidenceIsStaleAndRetainsItsProvenance(): void
    {
        $record = $this->record('pim', 'old-revision', 'same-checksum', 'verified');
        $report = (new CoverageEvidence())->apply($this->baseline(), [$record], ['pim' => 'same-checksum']);
        self::assertSame('stale', $report['operations']['pim:shared']['fixtures']);
        self::assertSame('old-revision', $report['operations']['pim:shared']['evidence']['fixtures']['revision']);
    }

    public function testBlockedAndSkippedOutcomesAreDistinctAndNeverCountAsPasses(): void
    {
        $blocked = $this->record('pim', 'current-revision', 'checksum', 'blocked');
        $skipped = $this->record('bulk-operations', 'current-revision', 'checksum', 'skipped');
        $report = (new CoverageEvidence())->apply($this->baseline(), [$blocked, $skipped], ['pim' => 'checksum', 'bulk-operations' => 'checksum']);
        self::assertSame(1, $report['components']['pim']['counts']['blocked']);
        self::assertSame(0, $report['components']['pim']['counts']['skipped']);
        self::assertSame(1, $report['components']['bulk-operations']['counts']['skipped']);
        self::assertSame(0, $report['components']['pim']['counts']['fixture_verified']);
        self::assertTrue($report['operations']['pim:shared']['deprecated']);
    }

    public function testVerifiedEvidenceRequiresNamedCases(): void
    {
        $record = $this->record('pim', 'current-revision', 'checksum', 'verified');
        $record['fixtures']['cases'] = [];
        $this->expectExceptionMessage('requires named evidence');
        (new CoverageEvidence())->apply($this->baseline(), [$record], ['pim' => 'checksum']);
    }

    public function testPublishedInventoryReconcilesEveryOperationAndExplainsAllRemainingGaps(): void
    {
        $catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
        $report = $catalog->coverage();
        self::assertCount(16, $report['components']);
        self::assertCount(547, $report['operations']);
        $totals = ['fixture_verified' => 0, 'workflow_verified' => 0, 'live_verified' => 0];
        foreach ($report['operations'] as $key => $row) {
            self::assertSame($report['revision'], $row['revision']);
            self::assertSame($row['component'].':'.$row['operation_id'], $key);
            self::assertMatchesRegularExpression('/^[a-f0-9]{64}$/', $row['openapi_sha256']);
            foreach (['fixtures' => 'fixture_verified', 'workflow' => 'workflow_verified', 'live_verification' => 'live_verified'] as $layer => $counter) {
                if ($row[$layer] === 'verified') ++$totals[$counter];
                elseif ($row[$layer] !== 'not_applicable') self::assertNotEmpty($row['remaining_actions'][$layer]);
            }
            if ($row['schema_gaps'] !== []) self::assertNotEmpty($row['remaining_actions']['typed_contract']);
            foreach ($row['evidence'] as $layer => $evidence) {
                foreach ($evidence['cases'] ?? [] as $case) {
                    [$class, $method] = explode('::', $case, 2);
                    self::assertTrue(method_exists($class, $method), 'Evidence must point to a real test: '.$case);
                }
            }
        }
        foreach ($totals as $key => $count) self::assertSame($count, array_sum(array_column(array_column($report['components'], 'counts'), $key)));
        self::assertSame(0, $totals['live_verified']);
    }

    private function baseline(): array
    {
        $catalog = ['title' => 'fixture', 'operations' => ['shared' => ['deprecated' => true]]];
        return (new CoverageInventory())->build(['pim' => $catalog, 'bulk-operations' => $catalog], 'current-revision');
    }

    private function record(string $component, string $revision, string $checksum, string $status): array
    {
        return ['component' => $component, 'operation_id' => 'shared', 'revision' => $revision, 'openapi_sha256' => $checksum,
            'fixtures' => ['status' => $status, 'reason' => 'Select the required fixture and run its contract checks.', 'cases' => ['App\\Tests\\TypedApiContractsTest::testInvalidPatchNeverContactsOauthOrTenant']]];
    }
}
