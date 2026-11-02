<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\AsyncOperationInventory;
use Youwe\BluestonePim\Api\OperationCatalog;
use PHPUnit\Framework\TestCase;

final class AsyncOperationInventoryTest extends TestCase
{
    public function testKnownPimAndBulkPollersAreMappedSeparately(): void
    {
        $inventory = new AsyncOperationInventory();
        $pim = $inventory->discover(['paths' => ['/pim/async/status/{taskId}' => ['get' => [
            'operationId' => 'getJobStatus', 'responses' => ['200' => ['description' => 'Status']],
        ]]]], ['component' => 'pim', 'operations' => ['getJobStatus' => ['method' => 'GET', 'path' => '/pim/async/status/{taskId}', 'deprecated' => false]]]);
        $bulk = $inventory->discover(['paths' => ['/bulk/jobs/{jobId}' => ['get' => [
            'operationId' => 'getJobStatus', 'responses' => ['200' => ['description' => 'Status']],
        ]]]], ['component' => 'bulk-operations', 'operations' => ['getJobStatus' => ['method' => 'GET', 'path' => '/bulk/jobs/{jobId}', 'deprecated' => false]]]);

        self::assertSame('pim-job-runner', $pim['getJobStatus']['protocol']);
        self::assertSame('bulk-operations-job-runner', $bulk['getJobStatus']['protocol']);
        self::assertSame('supported', $pim['getJobStatus']['status']);
        self::assertSame('supported', $bulk['getJobStatus']['status']);
    }

    public function testAcceptanceSignalsWithoutAProtocolBecomeAnExplicitGap(): void
    {
        $inventory = new AsyncOperationInventory();
        $result = $inventory->discover(['paths' => ['/tasks/{id}' => ['post' => [
            'operationId' => 'submitTask', 'responses' => ['202' => ['description' => 'Accepted']],
        ]]]], ['component' => 'tasks', 'operations' => ['submitTask' => ['method' => 'POST', 'path' => '/tasks/{id}', 'deprecated' => false]]]);

        self::assertSame('review_required', $result['submitTask']['status']);
        self::assertNotEmpty($result['submitTask']['reason']);
        self::assertContains('http-202', $result['submitTask']['signals']);
    }

    public function testOrdinarySynchronousOperationIsNotListedAsAsync(): void
    {
        $result = (new AsyncOperationInventory())->discover(['paths' => ['/items' => ['get' => [
            'operationId' => 'listItems', 'responses' => ['200' => ['description' => 'OK']],
        ]]]], ['component' => 'pim', 'operations' => ['listItems' => ['method' => 'GET', 'path' => '/items', 'deprecated' => false]]]);

        self::assertSame([], $result);
    }

    public function testPinnedSpecificationCandidatesAllHaveAProtocolOrAnExplicitGap(): void
    {
        $catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
        $revision = $catalog->activeRevision();
        self::assertNotNull($revision);
        $inventory = new AsyncOperationInventory();
        $candidates = 0;
        foreach (array_keys(OperationCatalog::COMPONENTS) as $component) {
            $specification = json_decode(file_get_contents($catalog->openApiPath($component, $revision)), true, 512, JSON_THROW_ON_ERROR);
            $componentCatalog = $catalog->component($component, $revision);
            $componentCatalog['component'] = $component;
            foreach ($inventory->discover($specification, $componentCatalog) as $operation) {
                ++$candidates;
                self::assertContains($operation['status'], ['supported', 'review_required']);
                if ($operation['status'] === 'supported') self::assertNotEmpty($operation['protocol']);
                else self::assertNotEmpty($operation['reason']);
            }
        }
        self::assertGreaterThan(0, $candidates);
    }
}
