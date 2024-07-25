<?php

namespace Src\Shared\Integracion\Exchange\Infrastructure\Repository;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Src\Shared\Integracion\Exchange\Domain\Interfaces\IntegracionExchangeCurrencyRepositoryInterface;


class IntegracionExchangeCurrencyApiRepository implements IntegracionExchangeCurrencyRepositoryInterface
{
    public const API_URL = 'https://api.currencyapi.com/v3/latest';
    public const API_TOKEN = 'cur_live_BcSgjp5deB8ts2F0cdNQN3gD9IqA3jHZZ8C7WBCY';


    public function __construct(
        protected Client $client
    ) {
    }
    public function obtenerInformacionCurrencies()
    {

        $response = $this->client->get(self::API_URL, [
            'query' => [
                'apikey' => self::API_TOKEN,
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        File::put('public/currency.json', json_encode($data));
        dd($data);
    }
}
