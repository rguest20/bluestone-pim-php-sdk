<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for search operations in OpenAPI revision 2c19c082ed473e21. */
final class SearchOperations extends GeneratedOperationAdapter
{
    public function assetsCount(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('assetsCount', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function assetsSearch(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('assetsSearch', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function assetsSearchWithCursor(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchCursorRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('assetsSearchWithCursor', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function find(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('find', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function productsCount(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('productsCount', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function productsSearch(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('productsSearch', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function productsSearchWithCursor(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('productsSearchWithCursor', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function productsSearchWithScroll(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('productsSearchWithScroll', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

}
