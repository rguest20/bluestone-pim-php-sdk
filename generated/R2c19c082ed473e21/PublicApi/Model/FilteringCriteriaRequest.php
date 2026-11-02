<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class FilteringCriteriaRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Product ids returned entries must be matched to.
     *
     * @var list<string>
     */
    protected $ids;
    /**
     * Product names products must contain.
     *
     * @var list<string>
     */
    protected $names;
    /**
     * Product numbers products must be equal to.
     *
     * @var list<string>
     */
    protected $numbers;
    /**
     * A set of labels products must contain.
     *
     * @var list<string>
     */
    protected $labels;
    /**
     * A set of category ids the product must be in.
     *
     * @var list<string>
     */
    protected $categories;
    /**
     * A set of attribute ids the product must be in.
     *
     * @var list<string>
     */
    protected $attributes;
    /**
     * Attribute filters.
     *
     * @var list<AttributeFilter>
     */
    protected $attributeFilters;
    /**
     * A set of relation ids the product must be in.
     *
     * @var list<string>
     */
    protected $relations;
    /**
     * A products must be of provided types
     *
     * @var list<string>
     */
    protected $productTypes;
    /**
     * Product ids that should be assign to bundles.
     *
     * @var list<string>
     */
    protected $bundles;
    /**
     * Product ids returned entries must be matched to.
     *
     * @return list<string>
     */
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     * Product ids returned entries must be matched to.
     *
     * @param list<string> $ids
     *
     * @return self
     */
    public function setIds(array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * Product names products must contain.
     *
     * @return list<string>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * Product names products must contain.
     *
     * @param list<string> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * Product numbers products must be equal to.
     *
     * @return list<string>
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }
    /**
     * Product numbers products must be equal to.
     *
     * @param list<string> $numbers
     *
     * @return self
     */
    public function setNumbers(array $numbers): self
    {
        $this->initialized['numbers'] = true;
        $this->numbers = $numbers;
        return $this;
    }
    /**
     * A set of labels products must contain.
     *
     * @return list<string>
     */
    public function getLabels(): array
    {
        return $this->labels;
    }
    /**
     * A set of labels products must contain.
     *
     * @param list<string> $labels
     *
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * A set of category ids the product must be in.
     *
     * @return list<string>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
    /**
     * A set of category ids the product must be in.
     *
     * @param list<string> $categories
     *
     * @return self
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * A set of attribute ids the product must be in.
     *
     * @return list<string>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * A set of attribute ids the product must be in.
     *
     * @param list<string> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * Attribute filters.
     *
     * @return list<AttributeFilter>
     */
    public function getAttributeFilters(): array
    {
        return $this->attributeFilters;
    }
    /**
     * Attribute filters.
     *
     * @param list<AttributeFilter> $attributeFilters
     *
     * @return self
     */
    public function setAttributeFilters(array $attributeFilters): self
    {
        $this->initialized['attributeFilters'] = true;
        $this->attributeFilters = $attributeFilters;
        return $this;
    }
    /**
     * A set of relation ids the product must be in.
     *
     * @return list<string>
     */
    public function getRelations(): array
    {
        return $this->relations;
    }
    /**
     * A set of relation ids the product must be in.
     *
     * @param list<string> $relations
     *
     * @return self
     */
    public function setRelations(array $relations): self
    {
        $this->initialized['relations'] = true;
        $this->relations = $relations;
        return $this;
    }
    /**
     * A products must be of provided types
     *
     * @return list<string>
     */
    public function getProductTypes(): array
    {
        return $this->productTypes;
    }
    /**
     * A products must be of provided types
     *
     * @param list<string> $productTypes
     *
     * @return self
     */
    public function setProductTypes(array $productTypes): self
    {
        $this->initialized['productTypes'] = true;
        $this->productTypes = $productTypes;
        return $this;
    }
    /**
     * Product ids that should be assign to bundles.
     *
     * @return list<string>
     */
    public function getBundles(): array
    {
        return $this->bundles;
    }
    /**
     * Product ids that should be assign to bundles.
     *
     * @param list<string> $bundles
     *
     * @return self
     */
    public function setBundles(array $bundles): self
    {
        $this->initialized['bundles'] = true;
        $this->bundles = $bundles;
        return $this;
    }
}