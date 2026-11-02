<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\AggregationFrequencyRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\AggregationFrequencyRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\AggregationFrequencyResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\AggregationFrequencyResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\EmailMessageListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\EmailMessageResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\EmailMessageSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailRecipient::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\EmailRecipientNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EntityWatchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\EntityWatchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EntityWatchResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\EntityWatchResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\FrequencyConfigRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\FrequencyConfigRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\FrequencyConfigResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\FrequencyConfigResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppMessageListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\InAppMessageListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppMessageResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\InAppMessageResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppMessageSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\InAppMessageSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppRecipient::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\InAppRecipientNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppUserMessageListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\InAppUserMessageListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppUserMessageResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\InAppUserMessageResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\PropertyUpdateString::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\PropertyUpdateStringNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\SubscriptionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\SubscriptionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserConfigurationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\UserConfigurationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserConfigurationResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\UserConfigurationResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\UserEventTypeListRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookAppsQueueResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookAppsQueueResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookAppsQueueUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookAppsQueueUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookCall::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookCallNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookCreateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookCreateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookEventTypeListRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookEventTypeListRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookMessageResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookMessageResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookMessageSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookMessageSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer\WebhookUpdateRequestNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\Normalizer\ReferenceNormalizer::class,
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