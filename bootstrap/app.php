<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //$middleware->append(AdminMiddleware::class);
    })
    ->withRouteMiddleware([
        // Laravel's default route middleware
        'auth' => \App\Http\Middleware\Authenticate::class,
        'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,

        // ✅ Your custom middleware for roles
        'admin' => \App\Http\Middleware\IsAdmin::class,
        'customer' => \App\Http\Middleware\IsCustomer::class,
    ])
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
