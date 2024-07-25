<?php

namespace Tests\Src\Shared\Infrastructure\Repository;

use Src\Shared\Integracion\Cripto\Domain\Interfaces\IntegracionCriptoRepositoryInterface;



class CriptoCurrencyApiFakeRepository implements IntegracionCriptoRepositoryInterface
{
    public function obtenerInformacionCriptos()
    {
        $file = file_get_contents('public/cripto.json');
        $data = json_decode($file, true);
        return $data;
    }
}
