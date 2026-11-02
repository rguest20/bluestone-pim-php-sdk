<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class SelectValueIdDto implements AdditionalPropertiesInterface
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
    protected $selectValueId;
    /**
     * @return string
     */
    public function getSelectValueId(): string
    {
        return $this->selectValueId;
    }
    /**
     * @param string $selectValueId
     *
     * @return self
     */
    public function setSelectValueId(string $selectValueId): self
    {
        $this->initialized['selectValueId'] = true;
        $this->selectValueId = $selectValueId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['selectValueId' => ['selectValueId', 'getSelectValueId', 'setSelectValueId']];
    }
}