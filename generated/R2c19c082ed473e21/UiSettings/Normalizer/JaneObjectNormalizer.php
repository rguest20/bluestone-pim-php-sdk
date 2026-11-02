<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnsSet::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\ColumnsSetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnsSetup::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\ColumnsSetupNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnsSetupSortConfig::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\ColumnsSetupSortConfigNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\UpdateColumnSetupForAnyUserRequestBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\UpdateColumnSetupForAnyUserRequestBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\UpdateColumnSetupForAnyUserRequestBodySortConfig::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\UpdateColumnSetupForAnyUserRequestBodySortConfigNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\ColumnSetupAllCreateRequestBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBodySortConfig::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\ColumnSetupAllCreateRequestBodySortConfigNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\FilterResultGeneric::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\FilterResultGenericNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\FilterResultAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\FilterResultAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributesForProductType::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\KeyAttributesForProductTypeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributes::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer\KeyAttributesNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}