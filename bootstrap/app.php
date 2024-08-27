<?php

use App\Http\Middleware\ActiveMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    /*->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        
    )
        */
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        using: function () {

            /*Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
            */

            Route::middleware('web')
                ->group( function () {
                    require_once base_path('routes/web.php');
                    //require_once base_path('routes/user.php');
                    require_once base_path('routes/admin.php');
                });

                /*->group(base_path('routes/web.php'));*/
        },
    )
    
    
    ->withMiddleware(function (Middleware $middleware) {
        // глобальный стек middleware
            $middleware
                ->append(LogMiddleware::class)   // добавить в конец списка
                ->alias(['active' => ActiveMiddleware::class, 'admin' => AdminMiddleware::class ]);  // алиас для МиддлВэа
                //prepend - добавить в начало списка
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
