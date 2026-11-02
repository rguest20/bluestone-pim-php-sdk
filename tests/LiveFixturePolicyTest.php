<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\LiveFixtureSelection;
use PHPUnit\Framework\TestCase;

final class LiveFixturePolicyTest extends TestCase
{
    public function testNoLiveGroupsAreSelectedByDefault(): void
    {
        $policy = json_decode(file_get_contents(dirname(__DIR__).'/resources/bluestone/live-fixture-policy.json'), true, 512, JSON_THROW_ON_ERROR);

        self::assertSame([], $policy['default_groups']);
        foreach ($policy['groups'] as $group) {
            self::assertTrue($group['requires_explicit_selection']);
        }
    }

    public function testAdministrativeAndExternalSideEffectsHaveDedicatedPrerequisites(): void
    {
        $policy = json_decode(file_get_contents(dirname(__DIR__).'/resources/bluestone/live-fixture-policy.json'), true, 512, JSON_THROW_ON_ERROR);
        $idp = $policy['groups']['idp-policy-lifecycle'];
        $webhook = $policy['groups']['external-webhook-ping'];

        self::assertTrue($idp['broad_effect_opt_in']);
        self::assertSame('broad_administrative_write', $idp['effect']);
        self::assertNotEmpty($idp['prerequisites']);
        self::assertStringContainsString('Archive only the policy', $idp['cleanup']);
        self::assertSame('external_side_effect', $webhook['effect']);
        self::assertStringContainsString('disposable webhook endpoint', implode(' ', $webhook['prerequisites']));
        self::assertSame([], $policy['default_groups']);
    }

    public function testPlanRequiresExplicitTargetGroupAndOperationsAndNeverAddsUnselectedOperations(): void
    {
        $root = dirname(__DIR__).'/resources/bluestone';
        $selection = new LiveFixtureSelection($root.'/live-fixture-policy.json', $root.'/live-verification-status.json');
        try {
            $selection->plan('test-tenant', [], [], false);
            self::fail('A plan without an explicit fixture selection must fail.');
        } catch (\InvalidArgumentException $error) {
            self::assertStringContainsString('no fixtures are selected by default', $error->getMessage());
        }

        $plan = $selection->plan('test-tenant', ['media-upload-roundtrip'], [
            'media-bank:createAsset',
            'media-bank:completeAsset',
        ]);
        self::assertSame('plan_only', $plan['mode']);
        self::assertFalse($plan['execution_allowed']);
        self::assertSame(['media-bank:createAsset', 'media-bank:completeAsset'], array_map(
            static fn (array $operation): string => $operation['component'].':'.$operation['operation_id'],
            $plan['operations'],
        ));
        self::assertStringContainsString('blocked', $plan['live_status']['status']);
    }

    public function testBroadEffectGroupRequiresASeparateOptInAndAnExplicitOperation(): void
    {
        $root = dirname(__DIR__).'/resources/bluestone';
        $selection = new LiveFixtureSelection($root.'/live-fixture-policy.json', $root.'/live-verification-status.json');
        try {
            $selection->plan('test-tenant', ['idp-policy-lifecycle'], ['idp:CreatePolicy']);
            self::fail('IDP policy operations require broad-effect opt-in.');
        } catch (\InvalidArgumentException $error) {
            self::assertStringContainsString('--allow-broad-effect', $error->getMessage());
        }
        try {
            $selection->plan('test-tenant', ['idp-policy-lifecycle'], ['idp:CreateRole'], true);
            self::fail('An operation outside the selected fixture group must not enter the plan.');
        } catch (\InvalidArgumentException $error) {
            self::assertStringContainsString('not part of an explicitly selected fixture group', $error->getMessage());
        }
    }
}
