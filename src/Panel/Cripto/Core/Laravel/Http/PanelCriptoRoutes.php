<?php

namespace Src\Panel\Cripto\Core\Laravel\Http;

use Illuminate\Support\Facades\Route;
use Baezeta\Kernel\Laravel\Routes\BaseRoutes;

class PanelCriptoRoutes extends BaseRoutes
{
    private static string $prefix = 'panel-cripto';

    public static function register(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::get('/', [PanelCriptoController::class, 'obtenerCriptos'])->name('panel.obtenerCriptos');
            });
    }
}
