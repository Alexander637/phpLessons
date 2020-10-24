<?php


class ArraySort
{
    public $array = [];

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function getArray()
    {
        return $this->array;
    }

    public function sortArray()
    {
        sort($this->array);
    }
}

$arraySort = new ArraySort(
    [5,3,17,2,48,55,33,11]
);

$arraySort->sortArray();
var_dump($arraySort->getArray());