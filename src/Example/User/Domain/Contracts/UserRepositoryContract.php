<?php

namespace Src\Example\User\Domain\Contracts;
use Src\Example\User\Domain\ValueObject\UserId;

interface UserRepositoryContract
{
    public function findAll() : array;
    public function findById(UserId $id) : ?array;
    public function deleteById(UserId $id) : bool;

}
