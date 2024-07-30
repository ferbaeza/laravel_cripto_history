<?php

namespace Src\Shared\Integracion\Cripto\Infrastructure\Repository;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Src\Shared\Integracion\Cripto\Domain\Interfaces\IntegracionCriptoRepositoryInterface;


class IntegracionCriptoRepository implements IntegracionCriptoRepositoryInterface
{
    public const COINAPI_TOKEN = '/APIKEY-F378A221-2692-4150-AE39-A744D9106A28';
    public const COINAPI_URL = 'https://api.coinapi.io/v1/exchanges';

    public function __construct(
        protected Client $client
    ) {
    }
    public function obtenerInformacionCriptos()
    {
        $response = $this->client->getAsync('api.coincap.io/v2/assets')->wait();
        $data = json_decode($response->getBody()->getContents(), true);
        File::put('public/criptoCoinCap.json', json_encode($data));
        dd($data);
        // $response = $this->client->get(self::COINAPI_URL . self::COINAPI_TOKEN);
        // $data = json_decode($response->getBody()->getContents(), true);
        return $data;
    }
}
