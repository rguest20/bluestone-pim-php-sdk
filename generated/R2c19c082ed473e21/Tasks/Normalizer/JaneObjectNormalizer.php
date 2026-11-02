<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\QuotaLimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\QuotaLimitExceededDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\AddCommentResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\AddCommentRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentReplyResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\AddCommentReplyResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentReplyRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\AddCommentReplyRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CommentReply::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\CommentReplyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\TaskComment::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\TaskCommentNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskReminderRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\CreateTaskReminderRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\TaskReminderListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\TaskReminderListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\TaskReminderResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\TaskReminderResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AssignProductToTaskRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\AssignProductToTaskRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AssignTaskRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\AssignTaskRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\CreateTaskRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\ListablePresentableGridTask::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\ListablePresentableGridTaskNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableGridTask::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\PresentableGridTaskNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\ErrorMessage::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\ErrorMessageNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableProductForTask::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\PresentableProductForTaskNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableTask::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\PresentableTaskNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableTaskResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\PresentableTaskResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableFoldersList::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\PresentableFoldersListNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\UpdateTaskRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer\UpdateTaskRequestNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\Normalizer\ReferenceNormalizer::class,
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