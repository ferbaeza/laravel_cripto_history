<?php

namespace Src\Shared;

use Src\Shared\Contrats\Bindings;
use Src\Auth\Core\Laravel\Bindings\AuthRegisterBindings;
use Src\Panel\Cripto\Core\Laravel\Bindings\PanelCriptoBindings;
use Src\Shared\Integracion\Shared\Infrastructure\Bindings\IntegracionBindings;
use Src\Shared\Integracion\Exchange\Infrastructure\Bindings\IntegracionExchangeBindings;

class SharedRegisterBindings implements Bindings
{
    public function bindings()
    {
        return array_merge(
            AuthRegisterBindings::register(),
            PanelCriptoBindings::register(),
            // IntegracionBindings::register(),
            IntegracionExchangeBindings::register(),
        );
    }
}
