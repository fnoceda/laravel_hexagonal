<?php

namespace Src\Example\User\Domain\ValueObject;


final class UserFullName
{

    private $value;

    public function __construct(array $value)
    {
        $this->value = $value;
    }

    public function value() : array
    {
        return $this->value;
    }

    public function firstName() : string
    {
        return $this->value['firstName'];
    }

    public function lastName() : string
    {
        return $this->value['lastName'];
    }

    public function fullName() : string
    {
        return $this->value['firstName'] .' '.$this->value['lastName'];
    }


}
