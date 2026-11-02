<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Authentication;

class SecuredAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('x-api-key', $this->{'apiKey'});
        return $request;
    }
    public function getScope(): string
    {
        return 'secured';
    }
}