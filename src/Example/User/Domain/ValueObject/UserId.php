<?php

namespace Src\Example\User\Domain\ValueObject;


final class UserId
{

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value() : int
    {
        return $this->value;
    }

}
