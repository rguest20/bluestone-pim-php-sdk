<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalPropertiesInterface;
class MetadataWithCursorAndViewsByProviderIdResponse implements AdditionalPropertiesInterface
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
     * @var list<MetadataWithCursorAndViewsByProviderIdDto>
     */
    protected $data;
    /**
     * @var string
     */
    protected $nextCursor;
    /**
     * @return list<MetadataWithCursorAndViewsByProviderIdDto>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<MetadataWithCursorAndViewsByProviderIdDto> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * @return string
     */
    public function getNextCursor(): string
    {
        return $this->nextCursor;
    }
    /**
     * @param string $nextCursor
     *
     * @return self
     */
    public function setNextCursor(string $nextCursor): self
    {
        $this->initialized['nextCursor'] = true;
        $this->nextCursor = $nextCursor;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'nextCursor' => ['nextCursor', 'getNextCursor', 'setNextCursor']];
    }
}