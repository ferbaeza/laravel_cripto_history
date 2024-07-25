<?php

namespace Src\Panel\Cripto\Core\Adapters\Driven;

use Src\Panel\Cripto\Core\Ports\Driven\PanelCriptoDrivenInterface;
use Src\Shared\Integracion\Exchange\Domain\Interfaces\IntegracionExchangeCurrencyRepositoryInterface;

class PanelCriptoDrivenAdapter implements PanelCriptoDrivenInterface
{

    public function __construct(
        public IntegracionExchangeCurrencyRepositoryInterface $currencyApiRepository
    )
        {
    }

    public function listarMonedas()
    {
        $this->currencyApiRepository->obtenerInformacionCurrencies();
    }

}
