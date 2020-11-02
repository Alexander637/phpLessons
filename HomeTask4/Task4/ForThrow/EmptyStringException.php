<?php

namespace ForThrow;

class EmptyStringException extends \Exception
{
    public function __construct()
    {
        $message = 'String empty!';
        parent::__construct($message);
    }
}