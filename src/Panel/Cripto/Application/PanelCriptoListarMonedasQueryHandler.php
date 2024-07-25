<?php

namespace Src\Panel\Cripto\Application;

use Src\Panel\Cripto\Core\Ports\Driven\PanelCriptoDrivenInterface;

final readonly class PanelCriptoListarMonedasQueryHandler
{
    public function __construct(
        public PanelCriptoDrivenInterface $panelCriptoDrivenAdapter
    )
        {
    }

    public function run(PanelCriptoListarMonedasQuery $query)
    {
        $informacion = $this->panelCriptoDrivenAdapter->listarMonedas();
        dd($informacion);
    }
}
