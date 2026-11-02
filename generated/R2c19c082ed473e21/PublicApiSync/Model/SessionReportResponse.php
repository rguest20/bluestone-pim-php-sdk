<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class SessionReportResponse implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $totalProducts;
    /**
     * @var int
     */
    protected $failedProducts;
    /**
     * @var int
     */
    protected $successProducts;
    /**
     * @var int
     */
    protected $totalCategories;
    /**
     * @var list<ProductPublicationSummaryResponse>|null
     */
    protected $metrics;
    /**
     * @var list<CategoryPublicationSummaryResponse>|null
     */
    protected $categoriesMetrics;
    /**
     * @return int
     */
    public function getTotalProducts(): int
    {
        return $this->totalProducts;
    }
    /**
     * @param int $totalProducts
     *
     * @return self
     */
    public function setTotalProducts(int $totalProducts): self
    {
        $this->initialized['totalProducts'] = true;
        $this->totalProducts = $totalProducts;
        return $this;
    }
    /**
     * @return int
     */
    public function getFailedProducts(): int
    {
        return $this->failedProducts;
    }
    /**
     * @param int $failedProducts
     *
     * @return self
     */
    public function setFailedProducts(int $failedProducts): self
    {
        $this->initialized['failedProducts'] = true;
        $this->failedProducts = $failedProducts;
        return $this;
    }
    /**
     * @return int
     */
    public function getSuccessProducts(): int
    {
        return $this->successProducts;
    }
    /**
     * @param int $successProducts
     *
     * @return self
     */
    public function setSuccessProducts(int $successProducts): self
    {
        $this->initialized['successProducts'] = true;
        $this->successProducts = $successProducts;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalCategories(): int
    {
        return $this->totalCategories;
    }
    /**
     * @param int $totalCategories
     *
     * @return self
     */
    public function setTotalCategories(int $totalCategories): self
    {
        $this->initialized['totalCategories'] = true;
        $this->totalCategories = $totalCategories;
        return $this;
    }
    /**
     * @return list<ProductPublicationSummaryResponse>|null
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }
    /**
     * @param list<ProductPublicationSummaryResponse>|null $metrics
     *
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * @return list<CategoryPublicationSummaryResponse>|null
     */
    public function getCategoriesMetrics(): ?array
    {
        return $this->categoriesMetrics;
    }
    /**
     * @param list<CategoryPublicationSummaryResponse>|null $categoriesMetrics
     *
     * @return self
     */
    public function setCategoriesMetrics(?array $categoriesMetrics): self
    {
        $this->initialized['categoriesMetrics'] = true;
        $this->categoriesMetrics = $categoriesMetrics;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalProducts' => ['totalProducts', 'getTotalProducts', 'setTotalProducts'], 'failedProducts' => ['failedProducts', 'getFailedProducts', 'setFailedProducts'], 'successProducts' => ['successProducts', 'getSuccessProducts', 'setSuccessProducts'], 'totalCategories' => ['totalCategories', 'getTotalCategories', 'setTotalCategories'], 'metrics' => ['metrics', 'getMetrics', 'setMetrics'], 'categoriesMetrics' => ['categoriesMetrics', 'getCategoriesMetrics', 'setCategoriesMetrics']];
    }
}