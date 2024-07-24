<?php

namespace Src\Shared\DAO\Usuario\Domain\Factory;

use Baezeta\Kernel\ValueObjects\Main\UuidValue;
use Src\Shared\DAO\Usuario\Domain\DTO\UsuarioDTO;


class UsuarioFactory
{
    public static function create(array $data)
    {
        return new UsuarioDTO(
            id : new UuidValue($data['id']),
            name : $data['name'],
            usuario : $data['usuario'],
            apellidoPrimero :$data['apellido_primero'],
            apellidoSegundo :$data['apellido_segundo'],
            email : $data['email'],
        );
    }

}