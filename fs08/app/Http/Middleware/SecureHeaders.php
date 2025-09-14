<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecureHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Response $response */
        $response = $next($request);

        $isProd = app()->isProduction();

        $headers = [
            'X-Frame-Options' => 'DENY',
            'X-Content-Type-Options' => 'nosniff',
            'Referrer-Policy' => 'no-referrer',
            'Permissions-Policy' => 'geolocation=(), microphone=(), camera=()',
        ];

        if ($isProd) {
            $csp = [
                "default-src 'self'",
                "base-uri 'self'",
                "frame-ancestors 'none'",
                "form-action 'self'",
                "img-src 'self' data: https://raw.githubusercontent.com",
                "script-src 'self'",
                "style-src 'self' 'unsafe-inline' https://fonts.bunny.net",
                "font-src 'self' https://fonts.bunny.net",
                "connect-src 'self'",
                'upgrade-insecure-requests',
            ];
            $headers['Strict-Transport-Security'] = 'max-age=63072000; includeSubDomains; preload';
            $headers['Content-Security-Policy'] = implode('; ', $csp);
        }

        foreach ($headers as $key => $value) {
            $response->headers->set($key, $value);
        }

        return $response;
    }
}
