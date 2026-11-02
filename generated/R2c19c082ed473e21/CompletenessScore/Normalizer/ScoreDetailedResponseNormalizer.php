<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScoreDetailedResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreDetailedResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreDetailedResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreDetailedResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (float) $data['score'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\ScoreDetailedResponseConstraint());
        }
        if (\array_key_exists('entityId', $data)) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        }
        if (\array_key_exists('score', $data) && $data['score'] !== null) {
            $object->setScore($data['score']);
            unset($data['score']);
        }
        elseif (\array_key_exists('score', $data) && $data['score'] === null) {
            $object->setScore(null);
            unset($data['score']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        if (\array_key_exists('sourceEventId', $data) && $data['sourceEventId'] !== null) {
            $object->setSourceEventId($data['sourceEventId']);
            unset($data['sourceEventId']);
        }
        elseif (\array_key_exists('sourceEventId', $data) && $data['sourceEventId'] === null) {
            $object->setSourceEventId(null);
            unset($data['sourceEventId']);
        }
        if (\array_key_exists('requirementsResults', $data)) {
            $values = [];
            foreach ($data['requirementsResults'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementResult::class, 'json', $context);
            }
            $object->setRequirementsResults($values);
            unset($data['requirementsResults']);
        }
        if (\array_key_exists('pimLastUpdate', $data) && $data['pimLastUpdate'] !== null) {
            $object->setPimLastUpdate($data['pimLastUpdate']);
            unset($data['pimLastUpdate']);
        }
        elseif (\array_key_exists('pimLastUpdate', $data) && $data['pimLastUpdate'] === null) {
            $object->setPimLastUpdate(null);
            unset($data['pimLastUpdate']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('entityId')) {
            $dataArray['entityId'] = $data->getEntityId();
        }
        if ($data->isInitialized('score')) {
            $dataArray['score'] = $data->getScore();
        }
        if ($data->isInitialized('context')) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('date')) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('sourceEventId')) {
            $dataArray['sourceEventId'] = $data->getSourceEventId();
        }
        if ($data->isInitialized('requirementsResults')) {
            $values = [];
            foreach ($data->getRequirementsResults() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['requirementsResults'] = $values;
        }
        if ($data->isInitialized('pimLastUpdate')) {
            $dataArray['pimLastUpdate'] = $data->getPimLastUpdate();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\ScoreDetailedResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreDetailedResponse::class => false];
    }
}