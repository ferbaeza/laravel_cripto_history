<?php

namespace Src\Shared;

use Illuminate\Support\Facades\Route;
use Src\Auth\Core\Laravel\Http\AuthRoutes;
use Baezeta\Kernel\Laravel\Routes\BaseRoutes;
use Src\Panel\Cripto\Core\Laravel\Http\PanelCriptoRoutes;

class SharedRegisterRoutes extends BaseRoutes
{
    public static function register(): void
    {
        Route::group([],function () {
            AuthRoutes::register();
            PanelCriptoRoutes::register();
        });
    }
}
