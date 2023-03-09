<?php

namespace Src\Example\Shared\Domain\Exceptions;

use Exception;

class CustomException extends Exception
{
    public function toException() : array
    {
        $reflectionClass = new \ReflectionClass(get_class($this)); //esto brinda info de la clase, en este caso de $this
        $class = explode('\\', $reflectionClass->getName());
        return [
            'status' => $this->getCode(),
            'error' => true,
            'class' => end($class),
            'message' => $this->getMessage()
        ];

    }
}
