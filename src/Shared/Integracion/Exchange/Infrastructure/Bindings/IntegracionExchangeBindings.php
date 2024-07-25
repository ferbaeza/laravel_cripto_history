<?php

namespace Src\Shared\Integracion\Exchange\Infrastructure\Bindings;

use Src\Shared\Contrats\Register;
use Src\Shared\Integracion\Exchange\Domain\Interfaces\IntegracionExchangeCurrencyRepositoryInterface;
use Src\Shared\Integracion\Exchange\Infrastructure\Repository\IntegracionExchangeCurrencyApiRepository;

class IntegracionExchangeBindings implements Register
{
    public static function register()
    {
        return [
            IntegracionExchangeCurrencyRepositoryInterface::class => IntegracionExchangeCurrencyApiRepository::class,
        ];
    }
}
