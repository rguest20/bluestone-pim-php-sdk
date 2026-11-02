<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class ProductPublicationSummaryResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $papiSessionId;
    /**
     * @var int|null
     */
    protected $addedProducts;
    /**
     * @var int|null
     */
    protected $modifiedProducts;
    /**
     * @var int|null
     */
    protected $unpublishedProducts;
    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPapiSessionId(): ?string
    {
        return $this->papiSessionId;
    }
    /**
     * @param string|null $papiSessionId
     *
     * @return self
     */
    public function setPapiSessionId(?string $papiSessionId): self
    {
        $this->initialized['papiSessionId'] = true;
        $this->papiSessionId = $papiSessionId;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getAddedProducts(): ?int
    {
        return $this->addedProducts;
    }
    /**
     * @param int|null $addedProducts
     *
     * @return self
     */
    public function setAddedProducts(?int $addedProducts): self
    {
        $this->initialized['addedProducts'] = true;
        $this->addedProducts = $addedProducts;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getModifiedProducts(): ?int
    {
        return $this->modifiedProducts;
    }
    /**
     * @param int|null $modifiedProducts
     *
     * @return self
     */
    public function setModifiedProducts(?int $modifiedProducts): self
    {
        $this->initialized['modifiedProducts'] = true;
        $this->modifiedProducts = $modifiedProducts;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getUnpublishedProducts(): ?int
    {
        return $this->unpublishedProducts;
    }
    /**
     * @param int|null $unpublishedProducts
     *
     * @return self
     */
    public function setUnpublishedProducts(?int $unpublishedProducts): self
    {
        $this->initialized['unpublishedProducts'] = true;
        $this->unpublishedProducts = $unpublishedProducts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['context' => ['context', 'getContext', 'setContext'], 'papiSessionId' => ['papiSessionId', 'getPapiSessionId', 'setPapiSessionId'], 'addedProducts' => ['addedProducts', 'getAddedProducts', 'setAddedProducts'], 'modifiedProducts' => ['modifiedProducts', 'getModifiedProducts', 'setModifiedProducts'], 'unpublishedProducts' => ['unpublishedProducts', 'getUnpublishedProducts', 'setUnpublishedProducts']];
    }
}