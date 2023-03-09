<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindByIdUseCase;
use Symfony\Component\HttpFoundation\Request;


final class UserFindByIdController
{
    /*Inyeccion de dependencias*/
    private $findByIdUseCase;
    public function __construct(UserFindByIdUseCase $findByIdUseCase)
    {
        $this->findByIdUseCase = $findByIdUseCase;
    }
    /*Inyeccion de dependencias*/


    public function __invoke(Request $request, int $id)
    {
        return $this->findByIdUseCase->__invoke($id);
    }
}

