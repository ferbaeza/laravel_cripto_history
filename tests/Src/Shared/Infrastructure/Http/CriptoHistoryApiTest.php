<?php

namespace Tests\Src\Shared\Infrastructure\Http;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Tests\Utils\Usuarios\UsuarioTestModel;
use Tests\Src\Shared\Infrastructure\Repository\CriptoCurrencyApiFakeRepository;
use Src\Shared\Integracion\Cripto\Domain\Interfaces\IntegracionCriptoRepositoryInterface;

class CriptoHistoryApiTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        $this->app->bind(IntegracionCriptoRepositoryInterface::class, function () {
            return new CriptoCurrencyApiFakeRepository();
        });
    }

    #[Test]
    public function deberia_devolver_algo_la_llamada_a_la_api()
    {
        $this->markTestSkipped('No se puede probar porque no se tiene acceso a la API');

        $userLogin = UsuarioTestModel::admin();
        $response = $this->actingAs($userLogin)->get(route('panel.obtenerCriptos'));
        dd($response->json());
        $response->assertStatus(200);
        $response = $this->currencyApiRepository->getInfo();
        $this->assertIsArray($response);
    }
}
