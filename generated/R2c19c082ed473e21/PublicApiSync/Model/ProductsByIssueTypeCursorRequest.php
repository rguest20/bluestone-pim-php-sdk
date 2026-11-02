<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class ProductsByIssueTypeCursorRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $issueTypes;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $cursor;
    /**
     * @var int
     */
    protected $pageSize;
    /**
     * @return list<string>
     */
    public function getIssueTypes(): array
    {
        return $this->issueTypes;
    }
    /**
     * @param list<string> $issueTypes
     *
     * @return self
     */
    public function setIssueTypes(array $issueTypes): self
    {
        $this->initialized['issueTypes'] = true;
        $this->issueTypes = $issueTypes;
        return $this;
    }
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
    public function getCursor(): ?string
    {
        return $this->cursor;
    }
    /**
     * @param string|null $cursor
     *
     * @return self
     */
    public function setCursor(?string $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['issueTypes' => ['issueTypes', 'getIssueTypes', 'setIssueTypes'], 'context' => ['context', 'getContext', 'setContext'], 'cursor' => ['cursor', 'getCursor', 'setCursor'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize']];
    }
}