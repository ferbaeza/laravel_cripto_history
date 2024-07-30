<?php

namespace Tests\Src\Shared\Infrastructure\Repository;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Src\Shared\Externo\Infrastructure\Repository\CriptoCurrencyApiRepository;


class CriptoCurrencyApiRepositoryTest extends TestCase
{
    private CriptoCurrencyApiRepository $criptoCurrencyApiRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->criptoCurrencyApiRepository = $this->app->make(CriptoCurrencyApiRepository::class);

    }

    #[Test]
    public function deberia_devolver_algo_la_llamada_a_la_api_desde_el_repository()
    {
        $this->markTestSkipped('No se puede probar porque no se tiene acceso a la API');
        $response = $this->criptoCurrencyApiRepository->getInfo();
        $this->assertIsArray($response);
    }

}
