<?php

namespace FormProcessing;

use ForThrow\EmptyStringException;
use ForThrow\InvalidInputTypeException;

class Processing
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
      $this->setName($name);

      $this->setAge($age);


    }

    public function ensureName($name)
    {
        if(empty($name)) {
            throw new EmptyStringException();
        }
    }

    public function ensureAge($age)
    {

        if(empty($age)) {
            throw new EmptyStringException();
        }

        if (!ctype_digit($age)) {
            throw new InvalidInputTypeException($age);
        }
    }

    private function setName($name)
    {
        $this->ensureName($name);

        $this->name = $name;

    }

    private function setAge($age)
    {
        $this->ensureAge($age);

        $this->age = (int)$age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}