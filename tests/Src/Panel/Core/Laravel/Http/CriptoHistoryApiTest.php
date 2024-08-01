<?php

namespace Tests\Src\Panel\Core\Laravel\Http;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Tests\Utils\Usuarios\UsuarioTestModel;
use Src\Shared\Integracion\Cripto\Domain\Interfaces\IntegracionCriptoRepositoryInterface;
use Tests\Src\Shared\Integracion\Cripto\Infrastructure\Repository\IntegracionCriptoFakeRepository;

class CriptoHistoryApiTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        $this->app->bind(IntegracionCriptoRepositoryInterface::class, function () {
            return new IntegracionCriptoFakeRepository();
        });
    }

    #[Test]
    public function deberia_devolver_algo_la_llamada_a_la_api_de_cripto()
    {
        $userLogin = UsuarioTestModel::admin();
        $response = $this->actingAs($userLogin)->get(route('panel.obtenerCriptos'));
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'exchange_id',
                    'website',
                    'name',
                ],
            ],
        ]);
    }
}
