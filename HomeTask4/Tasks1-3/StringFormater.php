<?php


class StringFormater
{
    public $arr = [];

    public function __set($name, $value)
    {
        $this->arr[$name] = strtoupper($value);

    }

    public function __get($name)
    {
        return  $this->arr[$name];
    }
}
$stringFormater = new StringFormater();

$stringFormater->name = 'uSeRnaMe';

echo $stringFormater->name; // вывести USERNAME