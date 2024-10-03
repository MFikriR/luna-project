<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole // Replace with the actual class name
{
    protected $routeMiddleware = [
        // Middleware lainnya...
        'role' => \App\Http\Middleware\CheckRole::class,
    ];

    // Other methods and logic for your middleware class
}