<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class SyncSessionResponse implements AdditionalPropertiesInterface
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
    protected $id;
    /**
     * @var list<string>
     */
    protected $contexts;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var list<ErrorReport>
     */
    protected $errorReports;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getContexts(): array
    {
        return $this->contexts;
    }
    /**
     * @param list<string> $contexts
     *
     * @return self
     */
    public function setContexts(array $contexts): self
    {
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return list<ErrorReport>
     */
    public function getErrorReports(): array
    {
        return $this->errorReports;
    }
    /**
     * @param list<ErrorReport> $errorReports
     *
     * @return self
     */
    public function setErrorReports(array $errorReports): self
    {
        $this->initialized['errorReports'] = true;
        $this->errorReports = $errorReports;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'contexts' => ['contexts', 'getContexts', 'setContexts'], 'status' => ['status', 'getStatus', 'setStatus'], 'errorReports' => ['errorReports', 'getErrorReports', 'setErrorReports']];
    }
}