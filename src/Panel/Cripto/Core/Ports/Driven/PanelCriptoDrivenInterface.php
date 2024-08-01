<?php

namespace Src\Panel\Cripto\Core\Ports\Driven;

use Src\Shared\Integracion\Cripto\Domain\Collection\IntegracionCriptoDTOCollection;

interface PanelCriptoDrivenInterface
{
    public function obtenerCriptosFromApi(): IntegracionCriptoDTOCollection;

}
