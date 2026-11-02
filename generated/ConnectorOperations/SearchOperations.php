<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait SearchOperations
{
    public function assetsCount(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assetsCount', func_get_args());
    }

    public function assetsSearch(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assetsSearch', func_get_args());
    }

    public function assetsSearchWithCursor(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchCursorRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assetsSearchWithCursor', func_get_args());
    }

    public function find(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('find', func_get_args());
    }

    public function productsCount(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('productsCount', func_get_args());
    }

    public function productsSearch(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('productsSearch', func_get_args());
    }

    public function productsSearchWithCursor(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('productsSearchWithCursor', func_get_args());
    }

    public function productsSearchWithScroll(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('productsSearchWithScroll', func_get_args());
    }

}
