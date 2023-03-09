<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Delete\UserDeleteByIdUseCase;
use Symfony\Component\HttpFoundation\Request;


final class UserDeleteByIdController
{
    /*Inyeccion de dependencias*/
    private $deleteByIdUseCase;
    public function __construct(UserDeleteByIdUseCase $deleteByIdUseCase)
    {
        $this->deleteByIdUseCase = $deleteByIdUseCase;
    }
    /*Inyeccion de dependencias*/


    public function __invoke(Request $request, int $id)
    {
        return $this->deleteByIdUseCase->__invoke($id);
    }
}

