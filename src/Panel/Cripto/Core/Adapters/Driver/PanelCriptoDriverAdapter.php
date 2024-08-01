<?php

namespace Src\Panel\Cripto\Core\Adapters\Driver;

use Baezeta\Kernel\Bus\Infrastructure\CommandBusFacade;
use Src\Panel\Cripto\Application\PanelCriptoListarMonedasQuery;
use Src\Panel\Cripto\Core\Ports\Driver\PanelCriptoDriverInterface;
use Src\Shared\Contrats\Response;

class PanelCriptoDriverAdapter implements PanelCriptoDriverInterface
{
    public function obtenerCriptos(): Response
    {
        return CommandBusFacade::process(new PanelCriptoListarMonedasQuery());
    }

}
