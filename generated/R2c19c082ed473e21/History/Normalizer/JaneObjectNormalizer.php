<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\EntityDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\EntityDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\HistoryEntryDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryMetadataDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\HistoryEntryMetadataDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\ListableHistoryEntryDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\ListableHistoryEntryDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryCountResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\HistoryEntryCountResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\ListableWithCursorHistoryEntryDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\ListableWithCursorHistoryEntryDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\Normalizer\ReferenceNormalizer::class,
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