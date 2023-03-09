<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;

final class UserFindAllController
{
    /*Inyeccion de dependencias*/
    private $findAllUseCase;
    public function __construct(UserFindAllUseCase $findAllUseCase)
    {
        $this->findAllUseCase = $findAllUseCase;
    }
    /*Inyeccion de dependencias*/


    public function __invoke()
    {
        return $this->findAllUseCase->__invoke();
    }
}

