<?php

declare(strict_types=1);

namespace App\Api;

enum ApiAuthentication: string
{
    case OAuth2 = 'oauth2';
    case ApiKey = 'api_key';
    case None = 'none';
}
