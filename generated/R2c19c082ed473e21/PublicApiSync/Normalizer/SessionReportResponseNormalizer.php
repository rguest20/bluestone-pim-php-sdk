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
class SessionReportResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SessionReportResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SessionReportResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SessionReportResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\SessionReportResponseConstraint());
        }
        if (\array_key_exists('totalProducts', $data)) {
            $object->setTotalProducts($data['totalProducts']);
            unset($data['totalProducts']);
        }
        if (\array_key_exists('failedProducts', $data)) {
            $object->setFailedProducts($data['failedProducts']);
            unset($data['failedProducts']);
        }
        if (\array_key_exists('successProducts', $data)) {
            $object->setSuccessProducts($data['successProducts']);
            unset($data['successProducts']);
        }
        if (\array_key_exists('totalCategories', $data)) {
            $object->setTotalCategories($data['totalCategories']);
            unset($data['totalCategories']);
        }
        if (\array_key_exists('metrics', $data) && $data['metrics'] !== null) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductPublicationSummaryResponse::class, 'json', $context);
            }
            $object->setMetrics($values);
            unset($data['metrics']);
        }
        elseif (\array_key_exists('metrics', $data) && $data['metrics'] === null) {
            $object->setMetrics(null);
            unset($data['metrics']);
        }
        if (\array_key_exists('categoriesMetrics', $data) && $data['categoriesMetrics'] !== null) {
            $values_1 = [];
            foreach ($data['categoriesMetrics'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryPublicationSummaryResponse::class, 'json', $context);
            }
            $object->setCategoriesMetrics($values_1);
            unset($data['categoriesMetrics']);
        }
        elseif (\array_key_exists('categoriesMetrics', $data) && $data['categoriesMetrics'] === null) {
            $object->setCategoriesMetrics(null);
            unset($data['categoriesMetrics']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('totalProducts')) {
            $dataArray['totalProducts'] = $data->getTotalProducts();
        }
        if ($data->isInitialized('failedProducts')) {
            $dataArray['failedProducts'] = $data->getFailedProducts();
        }
        if ($data->isInitialized('successProducts')) {
            $dataArray['successProducts'] = $data->getSuccessProducts();
        }
        if ($data->isInitialized('totalCategories')) {
            $dataArray['totalCategories'] = $data->getTotalCategories();
        }
        if ($data->isInitialized('metrics')) {
            $values = [];
            foreach ($data->getMetrics() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['metrics'] = $values;
        }
        if ($data->isInitialized('categoriesMetrics')) {
            $values_1 = [];
            foreach ($data->getCategoriesMetrics() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['categoriesMetrics'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\SessionReportResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SessionReportResponse::class => false];
    }
}