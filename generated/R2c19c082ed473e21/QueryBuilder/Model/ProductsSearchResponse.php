<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ProductsSearchResponse
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
     * @var list<ProductsSearchResponseDataItem>
     */
    protected $data;
    /**
     * @var list<ProductSearchQueryError>
     */
    protected $errors;
    /**
     * @return list<ProductsSearchResponseDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<ProductsSearchResponseDataItem> $data
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
     * @return list<ProductSearchQueryError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * @param list<ProductSearchQueryError> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}