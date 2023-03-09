<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\User\Domain\ValueObject\UserId;
use Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository;

final class UserFindByIdUseCase
{
    private $repository;

    //Aqui se hace la inversion de dependencias
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke( int $id) : ?array
    {
        $response = $this->repository->findById( new UserId($id) );
        if(!$response){
            $this->exception();
        }
        return $response;
    }

    private function exception()
    {
        throw new UserException('Usuario no encontrado', 404);
    }


}
