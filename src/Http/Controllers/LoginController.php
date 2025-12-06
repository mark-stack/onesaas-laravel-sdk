<?php

namespace Markevans\OnesaasLaravelSdk\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Routing\UrlGenerator;

class LoginController extends Controller
{
    public function handle(Request $request, UrlGenerator $url, ResponseFactory $response): JsonResponse
    {
        // Example: Validate JWT or HMAC signature here
        $payload = [
            'email' => $request->query('email'),
            'name'  => $request->query('name'),
            'user_id' => $request->query('user_id'),
        ];

        // Generate JWT or HMAC token (simplified example)
        $token = base64_encode(json_encode($payload));

        // Generate a URL to the 'onesaas.login' route
        $urlStr = $url->route('onesaas.login', ['token' => $token]);

        // Return the URL in JSON response
        return $response->json(['url' => $urlStr]);
    }
}