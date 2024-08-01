<?php

namespace Tests\Src\Shared\Integracion\Exchange\Infrastructure\Repository;

use Src\Shared\Integracion\Exchange\Domain\Interfaces\IntegracionExchangeCurrencyRepositoryInterface;




class IntegracionExchangeCurrencyApiFakeRepository implements IntegracionExchangeCurrencyRepositoryInterface
{
    public function obtenerInformacionCurrencies()
    {
        $file = file_get_contents('public/currency.json');
        $data = json_decode($file, true);
        return $data;
    }
}
