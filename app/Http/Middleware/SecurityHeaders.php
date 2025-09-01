<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Middleware для добавления заголовков безопасности
 * 
 * Добавляет стандартные заголовки безопасности для защиты от XSS, 
 * clickjacking и других атак.
 */
class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Защита от clickjacking
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        
        // Защита от XSS
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        
        // Предотвращение MIME type sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        
        // Политика Referrer
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        
        // Content Security Policy (базовый)
        $csp = "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; font-src 'self' data:;";
        $response->headers->set('Content-Security-Policy', $csp);
        
        // Strict Transport Security (только для HTTPS)
        if ($request->isSecure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        }
        
        // Скрытие информации о сервере
        $response->headers->remove('X-Powered-By');
        $response->headers->set('Server', 'nginx');

        return $response;
    }
}