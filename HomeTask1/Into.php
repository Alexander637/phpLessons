<?php


class Into
{
    public function getClassName()
    {
        return __CLASS__;
    }
}

$into = new Into();
var_dump($into->getClassName());