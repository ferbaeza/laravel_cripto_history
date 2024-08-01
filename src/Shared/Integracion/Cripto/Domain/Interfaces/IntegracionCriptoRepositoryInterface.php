<?php

namespace Src\Shared\Integracion\Cripto\Domain\Interfaces;

use Src\Shared\Integracion\Cripto\Domain\Collection\IntegracionCriptoDTOCollection;

interface IntegracionCriptoRepositoryInterface
{
    public function obtenerInformacionCriptos(): IntegracionCriptoDTOCollection;
}
