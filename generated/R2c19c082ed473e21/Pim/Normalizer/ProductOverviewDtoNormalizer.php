<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductOverviewDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductOverviewDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductOverviewDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductOverviewDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductOverviewDtoConstraint());
        }
        if (\array_key_exists('assets', $data)) {
            $object->setAssets($this->denormalizer->denormalize($data['assets'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountDto::class, 'json', $context));
            unset($data['assets']);
        }
        if (\array_key_exists('attributes', $data)) {
            $object->setAttributes($this->denormalizer->denormalize($data['attributes'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountDto::class, 'json', $context));
            unset($data['attributes']);
        }
        if (\array_key_exists('categories', $data)) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountDto::class, 'json', $context));
            unset($data['categories']);
        }
        if (\array_key_exists('productBundles', $data)) {
            $object->setProductBundles($this->denormalizer->denormalize($data['productBundles'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountDto::class, 'json', $context));
            unset($data['productBundles']);
        }
        if (\array_key_exists('productVariants', $data)) {
            $object->setProductVariants($this->denormalizer->denormalize($data['productVariants'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountDto::class, 'json', $context));
            unset($data['productVariants']);
        }
        if (\array_key_exists('relatedProducts', $data)) {
            $object->setRelatedProducts($this->denormalizer->denormalize($data['relatedProducts'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountDto::class, 'json', $context));
            unset($data['relatedProducts']);
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
        if ($data->isInitialized('assets')) {
            $dataArray['assets'] = $data->getAssets() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getAssets(), 'json', $context));
        }
        if ($data->isInitialized('attributes')) {
            $dataArray['attributes'] = $data->getAttributes() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getAttributes(), 'json', $context));
        }
        if ($data->isInitialized('categories')) {
            $dataArray['categories'] = $data->getCategories() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getCategories(), 'json', $context));
        }
        if ($data->isInitialized('productBundles')) {
            $dataArray['productBundles'] = $data->getProductBundles() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getProductBundles(), 'json', $context));
        }
        if ($data->isInitialized('productVariants')) {
            $dataArray['productVariants'] = $data->getProductVariants() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getProductVariants(), 'json', $context));
        }
        if ($data->isInitialized('relatedProducts')) {
            $dataArray['relatedProducts'] = $data->getRelatedProducts() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getRelatedProducts(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductOverviewDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductOverviewDto::class => false];
    }
}