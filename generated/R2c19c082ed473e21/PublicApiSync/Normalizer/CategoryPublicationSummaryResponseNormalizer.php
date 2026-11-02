<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CategoryPublicationSummaryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryPublicationSummaryResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryPublicationSummaryResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryPublicationSummaryResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\CategoryPublicationSummaryResponseConstraint());
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('papiSessionId', $data) && $data['papiSessionId'] !== null) {
            $object->setPapiSessionId($data['papiSessionId']);
            unset($data['papiSessionId']);
        }
        elseif (\array_key_exists('papiSessionId', $data) && $data['papiSessionId'] === null) {
            $object->setPapiSessionId(null);
            unset($data['papiSessionId']);
        }
        if (\array_key_exists('addedCategories', $data) && $data['addedCategories'] !== null) {
            $object->setAddedCategories($data['addedCategories']);
            unset($data['addedCategories']);
        }
        elseif (\array_key_exists('addedCategories', $data) && $data['addedCategories'] === null) {
            $object->setAddedCategories(null);
            unset($data['addedCategories']);
        }
        if (\array_key_exists('modifiedCategories', $data) && $data['modifiedCategories'] !== null) {
            $object->setModifiedCategories($data['modifiedCategories']);
            unset($data['modifiedCategories']);
        }
        elseif (\array_key_exists('modifiedCategories', $data) && $data['modifiedCategories'] === null) {
            $object->setModifiedCategories(null);
            unset($data['modifiedCategories']);
        }
        if (\array_key_exists('unpublishedCategories', $data) && $data['unpublishedCategories'] !== null) {
            $object->setUnpublishedCategories($data['unpublishedCategories']);
            unset($data['unpublishedCategories']);
        }
        elseif (\array_key_exists('unpublishedCategories', $data) && $data['unpublishedCategories'] === null) {
            $object->setUnpublishedCategories(null);
            unset($data['unpublishedCategories']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('context')) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('papiSessionId')) {
            $dataArray['papiSessionId'] = $data->getPapiSessionId();
        }
        if ($data->isInitialized('addedCategories')) {
            $dataArray['addedCategories'] = $data->getAddedCategories();
        }
        if ($data->isInitialized('modifiedCategories')) {
            $dataArray['modifiedCategories'] = $data->getModifiedCategories();
        }
        if ($data->isInitialized('unpublishedCategories')) {
            $dataArray['unpublishedCategories'] = $data->getUnpublishedCategories();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\CategoryPublicationSummaryResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryPublicationSummaryResponse::class => false];
    }
}