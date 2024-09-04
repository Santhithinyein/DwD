<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Management;
use App\Http\Middleware\Normal;
use App\Http\Middleware\Religious;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->web(append:[
            App\Http\Middleware\LocalizationMiddleware::class,
        ]);

        $middleware->alias([
            'superadmin'=>SuperAdmin::class,
            'admin'=>Admin::class,
            'normal'=>Normal::class,
            'religious'=>Religious::class,
            'management'=>Management::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
