<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class ProductIssue implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $context;
    /**
     * @var string
     */
    protected $issueType;
    /**
     * @var int
     */
    protected $count;
    /**
     * @return string|null
     */
    public function getContext(): ?string
    {
        return $this->context;
    }
    /**
     * @param string|null $context
     *
     * @return self
     */
    public function setContext(?string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return string
     */
    public function getIssueType(): string
    {
        return $this->issueType;
    }
    /**
     * @param string $issueType
     *
     * @return self
     */
    public function setIssueType(string $issueType): self
    {
        $this->initialized['issueType'] = true;
        $this->issueType = $issueType;
        return $this;
    }
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['context' => ['context', 'getContext', 'setContext'], 'issueType' => ['issueType', 'getIssueType', 'setIssueType'], 'count' => ['count', 'getCount', 'setCount']];
    }
}