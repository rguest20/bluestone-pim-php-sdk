<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeDefinitionUpdateResponse implements AdditionalPropertiesInterface
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
     * Number of categories with altered column attributes. This field helps track changes in column attributes at the
     * category level.
     *
     * @var int
     */
    protected $numberOfAlteredCategoriesWithColumnAttributes;
    /**
     * Number of categories with altered matrix attributes. This field helps track changes in matrix attributes at the
     * category level.
     *
     * @var int
     */
    protected $numberOfAlteredCategoriesWithMatrixAttributes;
    /**
     * Number of categories with altered select attributes. This field helps track changes in select attributes at the
     * category level.
     *
     * @var int
     */
    protected $numberOfAlteredCategoriesWithSelectAttributes;
    /**
     * Number of products with altered column attributes. This field helps track changes in column attributes at the
     * product level.
     *
     * @var int
     */
    protected $numberOfAlteredProductWithColumnAttributes;
    /**
     * Number of products with altered matrix attributes. This field helps track changes in matrix attributes at the
     * product level.
     *
     * @var int
     */
    protected $numberOfAlteredProductWithMatrixAttributes;
    /**
     * Number of products with altered select attributes. This field helps track changes in select attributes at the
     * product level.
     *
     * @var int
     */
    protected $numberOfAlteredProductWithSelectAttributes;
    /**
     * Number of categories with altered column attributes. This field helps track changes in column attributes at the
     * category level.
     *
     * @return int
     */
    public function getNumberOfAlteredCategoriesWithColumnAttributes(): int
    {
        return $this->numberOfAlteredCategoriesWithColumnAttributes;
    }
    /**
    * Number of categories with altered column attributes. This field helps track changes in column attributes at the
    category level.
    *
    * @param int $numberOfAlteredCategoriesWithColumnAttributes
    *
    * @return self
    */
    public function setNumberOfAlteredCategoriesWithColumnAttributes(int $numberOfAlteredCategoriesWithColumnAttributes): self
    {
        $this->initialized['numberOfAlteredCategoriesWithColumnAttributes'] = true;
        $this->numberOfAlteredCategoriesWithColumnAttributes = $numberOfAlteredCategoriesWithColumnAttributes;
        return $this;
    }
    /**
     * Number of categories with altered matrix attributes. This field helps track changes in matrix attributes at the
     * category level.
     *
     * @return int
     */
    public function getNumberOfAlteredCategoriesWithMatrixAttributes(): int
    {
        return $this->numberOfAlteredCategoriesWithMatrixAttributes;
    }
    /**
    * Number of categories with altered matrix attributes. This field helps track changes in matrix attributes at the
    category level.
    *
    * @param int $numberOfAlteredCategoriesWithMatrixAttributes
    *
    * @return self
    */
    public function setNumberOfAlteredCategoriesWithMatrixAttributes(int $numberOfAlteredCategoriesWithMatrixAttributes): self
    {
        $this->initialized['numberOfAlteredCategoriesWithMatrixAttributes'] = true;
        $this->numberOfAlteredCategoriesWithMatrixAttributes = $numberOfAlteredCategoriesWithMatrixAttributes;
        return $this;
    }
    /**
     * Number of categories with altered select attributes. This field helps track changes in select attributes at the
     * category level.
     *
     * @return int
     */
    public function getNumberOfAlteredCategoriesWithSelectAttributes(): int
    {
        return $this->numberOfAlteredCategoriesWithSelectAttributes;
    }
    /**
    * Number of categories with altered select attributes. This field helps track changes in select attributes at the
    category level.
    *
    * @param int $numberOfAlteredCategoriesWithSelectAttributes
    *
    * @return self
    */
    public function setNumberOfAlteredCategoriesWithSelectAttributes(int $numberOfAlteredCategoriesWithSelectAttributes): self
    {
        $this->initialized['numberOfAlteredCategoriesWithSelectAttributes'] = true;
        $this->numberOfAlteredCategoriesWithSelectAttributes = $numberOfAlteredCategoriesWithSelectAttributes;
        return $this;
    }
    /**
     * Number of products with altered column attributes. This field helps track changes in column attributes at the
     * product level.
     *
     * @return int
     */
    public function getNumberOfAlteredProductWithColumnAttributes(): int
    {
        return $this->numberOfAlteredProductWithColumnAttributes;
    }
    /**
    * Number of products with altered column attributes. This field helps track changes in column attributes at the
    product level.
    *
    * @param int $numberOfAlteredProductWithColumnAttributes
    *
    * @return self
    */
    public function setNumberOfAlteredProductWithColumnAttributes(int $numberOfAlteredProductWithColumnAttributes): self
    {
        $this->initialized['numberOfAlteredProductWithColumnAttributes'] = true;
        $this->numberOfAlteredProductWithColumnAttributes = $numberOfAlteredProductWithColumnAttributes;
        return $this;
    }
    /**
     * Number of products with altered matrix attributes. This field helps track changes in matrix attributes at the
     * product level.
     *
     * @return int
     */
    public function getNumberOfAlteredProductWithMatrixAttributes(): int
    {
        return $this->numberOfAlteredProductWithMatrixAttributes;
    }
    /**
    * Number of products with altered matrix attributes. This field helps track changes in matrix attributes at the
    product level.
    *
    * @param int $numberOfAlteredProductWithMatrixAttributes
    *
    * @return self
    */
    public function setNumberOfAlteredProductWithMatrixAttributes(int $numberOfAlteredProductWithMatrixAttributes): self
    {
        $this->initialized['numberOfAlteredProductWithMatrixAttributes'] = true;
        $this->numberOfAlteredProductWithMatrixAttributes = $numberOfAlteredProductWithMatrixAttributes;
        return $this;
    }
    /**
     * Number of products with altered select attributes. This field helps track changes in select attributes at the
     * product level.
     *
     * @return int
     */
    public function getNumberOfAlteredProductWithSelectAttributes(): int
    {
        return $this->numberOfAlteredProductWithSelectAttributes;
    }
    /**
    * Number of products with altered select attributes. This field helps track changes in select attributes at the
    product level.
    *
    * @param int $numberOfAlteredProductWithSelectAttributes
    *
    * @return self
    */
    public function setNumberOfAlteredProductWithSelectAttributes(int $numberOfAlteredProductWithSelectAttributes): self
    {
        $this->initialized['numberOfAlteredProductWithSelectAttributes'] = true;
        $this->numberOfAlteredProductWithSelectAttributes = $numberOfAlteredProductWithSelectAttributes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['numberOfAlteredCategoriesWithColumnAttributes' => ['numberOfAlteredCategoriesWithColumnAttributes', 'getNumberOfAlteredCategoriesWithColumnAttributes', 'setNumberOfAlteredCategoriesWithColumnAttributes'], 'numberOfAlteredCategoriesWithMatrixAttributes' => ['numberOfAlteredCategoriesWithMatrixAttributes', 'getNumberOfAlteredCategoriesWithMatrixAttributes', 'setNumberOfAlteredCategoriesWithMatrixAttributes'], 'numberOfAlteredCategoriesWithSelectAttributes' => ['numberOfAlteredCategoriesWithSelectAttributes', 'getNumberOfAlteredCategoriesWithSelectAttributes', 'setNumberOfAlteredCategoriesWithSelectAttributes'], 'numberOfAlteredProductWithColumnAttributes' => ['numberOfAlteredProductWithColumnAttributes', 'getNumberOfAlteredProductWithColumnAttributes', 'setNumberOfAlteredProductWithColumnAttributes'], 'numberOfAlteredProductWithMatrixAttributes' => ['numberOfAlteredProductWithMatrixAttributes', 'getNumberOfAlteredProductWithMatrixAttributes', 'setNumberOfAlteredProductWithMatrixAttributes'], 'numberOfAlteredProductWithSelectAttributes' => ['numberOfAlteredProductWithSelectAttributes', 'getNumberOfAlteredProductWithSelectAttributes', 'setNumberOfAlteredProductWithSelectAttributes']];
    }
}