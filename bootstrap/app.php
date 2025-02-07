<?php

use App\Http\Middleware\AuthenticatedOnly;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsAdminAndDeveloper;
use App\Http\Middleware\IsAdminOrDeveloper;
use App\Http\Middleware\IsDeveloper;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "auth_only" => AuthenticatedOnly::class,
            "admin_only" => IsAdmin::class,
            "developer_only" => IsDeveloper::class,
            "admin_or_developer" => IsAdminOrDeveloper::class,
            "root" => IsAdminAndDeveloper::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
