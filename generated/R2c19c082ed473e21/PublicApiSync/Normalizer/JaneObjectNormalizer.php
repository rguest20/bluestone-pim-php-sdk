<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CreateSessionReportRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\CreateSessionReportRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductsByIssueTypeCursorRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductsByIssueTypeCursorRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductCursorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductsByIssueTypeCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductsByIssueTypeCursorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\AssetsByIssueTypeCursorRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\AssetCursorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\AssetsByIssueTypeCursorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AddProductsToSessionRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\AddProductsToSessionRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductSyncRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductSyncRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SyncSessionRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\SyncSessionRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchListRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductStateSearchListRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchElementListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductStateSearchElementListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductStateSearchListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateChangeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductStateChangeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryStateSearchListRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\CategoryStateSearchListRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryStateSearchElementListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\CategoryStateSearchElementListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryStateSearchListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\CategoryStateSearchListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SessionReportLinkResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\SessionReportLinkResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductIssue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductIssueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductsIssuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductsIssuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\EntitiesIssuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\EntitiesIssuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\EntityIssue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\EntityIssueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetIssue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\AssetIssueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsIssuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\AssetsIssuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryPublicationSummaryResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\CategoryPublicationSummaryResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductPublicationSummaryResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ProductPublicationSummaryResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SessionReportResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\SessionReportResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ErrorReport::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ErrorReportNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SyncSessionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\SyncSessionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\ReferenceNormalizer::class,
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