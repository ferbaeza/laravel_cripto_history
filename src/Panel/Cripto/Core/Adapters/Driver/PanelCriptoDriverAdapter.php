<?php

namespace Src\Panel\Cripto\Core\Adapters\Driver;

use Baezeta\Kernel\Bus\Infrastructure\CommandBusFacade;
use Src\Panel\Cripto\Application\PanelCriptoListarMonedasQuery;
use Src\Panel\Cripto\Core\Ports\Driver\PanelCriptoDriverInterface;

class PanelCriptoDriverAdapter implements PanelCriptoDriverInterface
{
    public function obtenerCriptos()
    {
        return CommandBusFacade::process(new PanelCriptoListarMonedasQuery());
    }

}
