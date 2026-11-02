<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryWithCursorViewMetadata implements AdditionalPropertiesInterface
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
     * @var MultiLanguageDto|null
     */
    protected $name;
    /**
     * Catalog or category's number.
     *
     * @var string|null
     */
    protected $number;
    /**
     * Catalog or category's description.
     *
     * @var string|null
     */
    protected $parentId;
    /**
     * The flag indicates whether the catalog or category is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * @return MultiLanguageDto|null
     */
    public function getName(): ?MultiLanguageDto
    {
        return $this->name;
    }
    /**
     * @param MultiLanguageDto|null $name
     *
     * @return self
     */
    public function setName(?MultiLanguageDto $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Catalog or category's number.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Catalog or category's number.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Catalog or category's description.
     *
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }
    /**
     * Catalog or category's description.
     *
     * @param string|null $parentId
     *
     * @return self
     */
    public function setParentId(?string $parentId): self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * The flag indicates whether the catalog or category is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * The flag indicates whether the catalog or category is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     **Note**: This flag is only relevant on calls to the endpoint performed from the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'parentId' => ['parentId', 'getParentId', 'setParentId'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly']];
    }
}