<?php

namespace Src\Example\User\Application\Delete;

use Illuminate\Support\Facades\Log;
use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository;
use Src\Example\User\Domain\ValueObject\UserId;

final class UserDeleteByIdUseCase
{
    private $repository;

    //Aqui se hace la inversion de dependencias
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke( int $id) : array
    {
        $response = $this->repository->deleteById( new UserId($id) );
        if(!$response){
            $this->exception();
        }
        return ["message" => "OK"];
    }

    private function exception()
    {
        throw new UserException('Usuario no encontrado', 500);
    }


}
