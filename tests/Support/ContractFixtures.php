<?php

declare(strict_types=1);

namespace App\Tests\Support;

/** Loads literal, reviewed examples independently of the OpenAPI schema validator. */
final class ContractFixtures
{
    public static function documents(): iterable
    {
        $root = dirname(__DIR__, 2).'/resources/bluestone/fixtures';
        foreach (glob($root.'/*/*.json') ?: [] as $file) {
            $document = json_decode(file_get_contents($file), false, 512, JSON_THROW_ON_ERROR);
            $document->fixture_file = substr($file, strlen(dirname(__DIR__, 2)) + 1);
            yield $file => $document;
        }
    }

    public static function cases(string $phase): iterable
    {
        foreach (self::documents() as $document) {
            foreach ($document->operations as $id => $operation) {
                $key = $document->component.':'.$id.':'.$document->revision;
                if ($phase === 'valid') {
                    yield $key => [$document, $id];
                    continue;
                }
                foreach ($operation->{$phase} ?? [] as $index => $case) yield $key.':'.$index => [$document, $id, $case];
            }
        }
    }

    public static function materialize(\stdClass $value, \stdClass $document): \stdClass
    {
        $copy = self::copy($value);
        if (property_exists($copy, 'json_ref')) {
            if (!property_exists($document->payloads, $copy->json_ref)) throw new \RuntimeException('Unknown fixture payload: '.$copy->json_ref);
            $copy->json = self::copy($document->payloads->{$copy->json_ref});
            unset($copy->json_ref);
        }
        return $copy;
    }

    public static function mutate(\stdClass $value, \stdClass $change): \stdClass
    {
        $copy = self::copy($value);
        $parts = explode('/', ltrim($change->at, '/'));
        $last = array_pop($parts);
        $target = &$copy;
        foreach ($parts as $part) {
            $part = str_replace(['~1', '~0'], ['/', '~'], $part);
            if (is_array($target)) $target = &$target[$part];
            else $target = &$target->{$part};
        }
        $last = str_replace(['~1', '~0'], ['/', '~'], $last);
        if (is_array($target)) {
            if ($change->remove ?? false) unset($target[$last]);
            else $target[$last] = self::copy($change->replace);
        } else {
            if ($change->remove ?? false) unset($target->{$last});
            else $target->{$last} = self::copy($change->replace);
        }
        return $copy;
    }

    private static function copy(mixed $value): mixed
    {
        return json_decode(json_encode($value, JSON_THROW_ON_ERROR), false, 512, JSON_THROW_ON_ERROR);
    }
}
