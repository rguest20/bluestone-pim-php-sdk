<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterPermissionUpdateRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterPermissionUpdateRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\ContextRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterResponseDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterResponseDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterResponseListDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterResponseListDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterCreateRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterCreateRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FindContextsByNamesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FindContextsByNamesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextResponseDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\ContextResponseDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextResponseListDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\ContextResponseListDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterUpdateRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterUpdateRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterPermissionResponseDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterPermissionResponseDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterPermissionResponseListDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\FilterPermissionResponseListDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\Normalizer\ReferenceNormalizer::class,
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