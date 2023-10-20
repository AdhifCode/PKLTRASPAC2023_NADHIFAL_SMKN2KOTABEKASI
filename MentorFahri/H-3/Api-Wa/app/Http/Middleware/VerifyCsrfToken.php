<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/send-whatsapp-message',
        '/send-whatsapp-message-postman',
        '/send-whatsapp-poll-postman',
        '/send-whatsapp-lokasi-postman',
        '/send-whatsapp-button-postman'
    ];
}
