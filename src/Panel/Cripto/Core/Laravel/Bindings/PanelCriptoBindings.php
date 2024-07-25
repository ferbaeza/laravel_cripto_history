<?php

namespace Src\Panel\Cripto\Core\Laravel\Bindings;

use Src\Shared\Contrats\Register;
use Src\Panel\Cripto\Core\Ports\Driven\PanelCriptoDrivenInterface;
use Src\Panel\Cripto\Core\Ports\Driver\PanelCriptoDriverInterface;
use Src\Panel\Cripto\Core\Adapters\Driven\PanelCriptoDrivenAdapter;
use Src\Panel\Cripto\Core\Adapters\Driver\PanelCriptoDriverAdapter;

class PanelCriptoBindings implements Register
{
    public static function register()
    {
        return [
            PanelCriptoDriverInterface::class => PanelCriptoDriverAdapter::class,
            PanelCriptoDrivenInterface::class => PanelCriptoDrivenAdapter::class,
        ];
    }


}
