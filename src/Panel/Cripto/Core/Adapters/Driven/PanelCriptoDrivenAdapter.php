<?php

namespace Src\Panel\Cripto\Core\Adapters\Driven;

use Src\Panel\Cripto\Core\Ports\Driven\PanelCriptoDrivenInterface;
use Src\Shared\Integracion\Cripto\Domain\Collection\IntegracionCriptoDTOCollection;
use Src\Shared\Integracion\Cripto\Domain\Interfaces\IntegracionCriptoRepositoryInterface;

class PanelCriptoDrivenAdapter implements PanelCriptoDrivenInterface
{
    public function __construct(
        public readonly IntegracionCriptoRepositoryInterface $integracionCriptoRepository
    )
        {
    }
    public function obtenerCriptosFromApi(): IntegracionCriptoDTOCollection
    {
        return $this->integracionCriptoRepository->obtenerInformacionCriptos();
    }
}
