<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class SaveProductsVlaSettingsByIdsRequest implements AdditionalPropertiesInterface
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
     * Internal ID of the single attribute definition whose VLA settings are being set.
     *
     * @var string
     */
    protected $attributeDefinitionId;
    /**
     * Variant copy flag. Omitted = removed.
     *
     * @var bool|null
     */
    protected $copy;
    /**
     * Variant defining attributes flag. Omitted = removed.
     *
     * @var bool|null
     */
    protected $definingAttributes;
    /**
     * Lock flag to determine that attribute is locked/unlocked. Omitted = removed.
     *
     * @var bool|null
     */
    protected $locked;
    /**
     * Variant mandatory flag. Omitted = removed.
     *
     * @var bool|null
     */
    protected $mandatory;
    /**
     * Internal IDs of the products to apply the settings to; 1 to 100 IDs. The operation fails if any of them does not exist.
     *
     * @var list<string>
     */
    protected $productIds;
    /**
     * Internal ID of the single attribute definition whose VLA settings are being set.
     *
     * @return string
     */
    public function getAttributeDefinitionId(): string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * Internal ID of the single attribute definition whose VLA settings are being set.
     *
     * @param string $attributeDefinitionId
     *
     * @return self
     */
    public function setAttributeDefinitionId(string $attributeDefinitionId): self
    {
        $this->initialized['attributeDefinitionId'] = true;
        $this->attributeDefinitionId = $attributeDefinitionId;
        return $this;
    }
    /**
     * Variant copy flag. Omitted = removed.
     *
     * @return bool|null
     */
    public function getCopy(): ?bool
    {
        return $this->copy;
    }
    /**
     * Variant copy flag. Omitted = removed.
     *
     * @param bool|null $copy
     *
     * @return self
     */
    public function setCopy(?bool $copy): self
    {
        $this->initialized['copy'] = true;
        $this->copy = $copy;
        return $this;
    }
    /**
     * Variant defining attributes flag. Omitted = removed.
     *
     * @return bool|null
     */
    public function getDefiningAttributes(): ?bool
    {
        return $this->definingAttributes;
    }
    /**
     * Variant defining attributes flag. Omitted = removed.
     *
     * @param bool|null $definingAttributes
     *
     * @return self
     */
    public function setDefiningAttributes(?bool $definingAttributes): self
    {
        $this->initialized['definingAttributes'] = true;
        $this->definingAttributes = $definingAttributes;
        return $this;
    }
    /**
     * Lock flag to determine that attribute is locked/unlocked. Omitted = removed.
     *
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Lock flag to determine that attribute is locked/unlocked. Omitted = removed.
     *
     * @param bool|null $locked
     *
     * @return self
     */
    public function setLocked(?bool $locked): self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;
        return $this;
    }
    /**
     * Variant mandatory flag. Omitted = removed.
     *
     * @return bool|null
     */
    public function getMandatory(): ?bool
    {
        return $this->mandatory;
    }
    /**
     * Variant mandatory flag. Omitted = removed.
     *
     * @param bool|null $mandatory
     *
     * @return self
     */
    public function setMandatory(?bool $mandatory): self
    {
        $this->initialized['mandatory'] = true;
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * Internal IDs of the products to apply the settings to; 1 to 100 IDs. The operation fails if any of them does not exist.
     *
     * @return list<string>
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }
    /**
     * Internal IDs of the products to apply the settings to; 1 to 100 IDs. The operation fails if any of them does not exist.
     *
     * @param list<string> $productIds
     *
     * @return self
     */
    public function setProductIds(array $productIds): self
    {
        $this->initialized['productIds'] = true;
        $this->productIds = $productIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'copy' => ['copy', 'getCopy', 'setCopy'], 'definingAttributes' => ['definingAttributes', 'getDefiningAttributes', 'setDefiningAttributes'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory'], 'productIds' => ['productIds', 'getProductIds', 'setProductIds']];
    }
}