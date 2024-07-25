<?php

namespace Src\Shared\Integracion\Shared\Infrastructure\Bindings;

use Src\Shared\Contrats\Register;
use Src\Shared\Integracion\Cripto\Infrastructure\Bindings\IntegracionCriptoBindings;
use Src\Shared\Integracion\Exchange\Infrastructure\Bindings\IntegracionExchangeBindings;

class IntegracionBindings implements Register
{
    public static function register()
    {
        return array_merge([
            IntegracionCriptoBindings::register(),
            IntegracionExchangeBindings::register(),
        ]);
    }
}
