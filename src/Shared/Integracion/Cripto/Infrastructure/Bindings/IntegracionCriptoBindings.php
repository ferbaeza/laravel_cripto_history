<?php

namespace Src\Shared\Integracion\Cripto\Infrastructure\Bindings;

use Src\Shared\Contrats\Register;
use Src\Shared\Integracion\Cripto\Domain\Interfaces\IntegracionCriptoRepositoryInterface;
use Src\Shared\Integracion\Cripto\Infrastructure\Repository\IntegracionCriptoRepository;

class IntegracionCriptoBindings implements Register
{
    public static function register()
    {
        return [
            IntegracionCriptoRepositoryInterface::class => IntegracionCriptoRepository::class,
        ];
    }
}
