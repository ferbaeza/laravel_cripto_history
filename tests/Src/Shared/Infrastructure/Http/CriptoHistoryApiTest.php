<?php

namespace Tests\Src\Shared\Infrastructure\Http;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Tests\Utils\Usuarios\UsuarioTestModel;
use Src\Shared\Externo\Domain\Interfaces\CurrencyApiRepositoryInterface;
use Tests\Src\Shared\Infrastructure\Repository\CriptoCurrencyApiFakeRepository;



class CriptoHistoryApiTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        $this->app->bind(CurrencyApiRepositoryInterface::class, function () {
            return new CriptoCurrencyApiFakeRepository();
        });
    }

    #[Test]
    public function deberia_devolver_algo_la_llamada_a_la_api()
    {
        $userLogin = UsuarioTestModel::admin();
        $response = $this->actingAs($userLogin)->get(route('cripto.obtenerInfo'));
        dd($response->json());
        $response->assertStatus(200);
        $response = $this->currencyApiRepository->getInfo();
        $this->assertIsArray($response);
    }
}
