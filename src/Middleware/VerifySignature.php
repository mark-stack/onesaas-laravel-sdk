<?php

namespace Markevans\OnesaasLaravelSdk\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifySignature
{
    public function handle(Request $request, Closure $next)
    {
        // TODO: Implement HMAC/JWT verification
        return $next($request);
    }
}