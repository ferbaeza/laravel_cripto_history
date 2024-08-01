<?php

namespace Tests\Src\Shared\Integracion\Cripto\Infrastructure\Repository;

use Src\Shared\Integracion\Cripto\Domain\Factory\IntegracionCriptoFactory;
use Src\Shared\Integracion\Cripto\Domain\Collection\IntegracionCriptoDTOCollection;
use Src\Shared\Integracion\Cripto\Domain\Interfaces\IntegracionCriptoRepositoryInterface;



class IntegracionCriptoFakeRepository implements IntegracionCriptoRepositoryInterface
{
    public function obtenerInformacionCriptos(): IntegracionCriptoDTOCollection
    {
        $file = file_get_contents('public/cripto.json');
        $data = json_decode($file, true);
        return IntegracionCriptoFactory::fromRepository($data);
    }
}
