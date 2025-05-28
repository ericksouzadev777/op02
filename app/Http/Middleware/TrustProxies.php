<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class TrustProxies
{
    /**
     * Confia em **todos** os proxies (inclusive o do EasyPanel).
     */
    protected $proxies = '*';

    /**
     * Usa todos os cabeçalhos X-Forwarded-* para detectar esquema, host, etc.
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
