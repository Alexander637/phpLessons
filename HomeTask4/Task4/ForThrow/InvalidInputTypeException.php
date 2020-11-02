<?php

namespace ForThrow;

class InvalidInputTypeException extends \Exception
{
    private $age;

    public function __construct($age)
    {
        $this->age = $age;
        $message = 'Incorrect data: ';
        parent::__construct($message);
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}