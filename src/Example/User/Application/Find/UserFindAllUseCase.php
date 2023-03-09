<?php

namespace Src\Example\User\Application\Find;

use Illuminate\Support\Facades\Log;
use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository;

final class UserFindAllUseCase
{
    private $repository;

    //Aqui se hace la inversion de dependencias
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke() : array
    {
        // throw new UserException('Esto es una excepcion', 418);
        return $this->repository->findAll();
    }
}
