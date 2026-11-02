<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ListProviderRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\ListProviderRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ListProviderResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\ListProviderResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ProviderResponseDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\ProviderResponseDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\MetadataViewTypeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\MetadataViewTypeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\MetadataWithCursorAndViewsByProviderIdRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\MetadataWithCursorAndViewsByProviderIdRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\MetadataWithCursorAndViewsByProviderIdDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\MetadataWithCursorAndViewsByProviderIdDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\MetadataWithCursorAndViewsByProviderIdResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\MetadataWithCursorAndViewsByProviderIdResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\GetMetadataForEntitiesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\GetMetadataForEntitiesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\GetMetadataForEntitiesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\GetMetadataForEntitiesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ProviderEntityMetadata::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\ProviderEntityMetadataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\UpsertMetadataDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\UpsertMetadataDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\UpsertMetadataRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\UpsertMetadataRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\DeleteProviderMetadataByIdsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\DeleteProviderMetadataByIdsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\DeleteProviderMetadataByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\DeleteProviderMetadataByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\DeleteMetadataRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\DeleteMetadataRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\Normalizer\ReferenceNormalizer::class,
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