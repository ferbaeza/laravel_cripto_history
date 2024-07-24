<?php

namespace Src\Auth\Application;

use Src\Shared\Contrats\Response;
use Baezeta\Kernel\Criteria\Criteria;
use Src\Auth\Core\Service\LoginService;
use Src\Auth\Domain\Response\AuthUsuarioResponse;
use Src\Auth\Domain\Exceptions\AuthLoginExcepption;
use Src\Auth\Core\Ports\Driven\AuthEloquentDrivenInterface;

final class AuthLoginCommandHandler 
{
    public function __construct(
        private LoginService $loginService,
        private AuthEloquentDrivenInterface $authEloquentDrivenInterface
    )
        {
    }

    public function run(AuthLoginCommand $command) : Response
    {
        $loginCorrectoByName = $this->loginService->loginByName($command->identidad, $command->password);

        if(!$loginCorrectoByName) {
            throw AuthLoginExcepption::drop($command->identidad);
        }

        $criteria = new Criteria();
        $criteria->where('name', $command->identidad);
        $usuario = $this->authEloquentDrivenInterface->obtenerUsuario($criteria);
        return new AuthUsuarioResponse($usuario);
    }

}