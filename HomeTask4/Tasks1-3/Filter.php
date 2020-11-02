<?php


class Filter
{
    private $arr = [];

   public function __construct(array $arr)
   {
       $this->arr = $arr;

   }
   public function strUnset()
   {
       $getArr = $this->getArr();

       foreach ($getArr as $item => $value) {
           if (is_string($value)) {
               unset($getArr[$item]);
           }
       }

       return $getArr;
   }

    /**
     * @return array
     */
    public function getArr(): array
    {
        return $this->arr;
    }

   public function intUnset()
   {
       $getArr = $this->getArr();

       foreach ($getArr as $item => $value) {
           if (is_int($value)) {
               unset($getArr[$item]);
           }
       }

       return $getArr;
   }


    public function __call($name, $arguments)
    {
        $result = [];

        switch ($name) {
           case 'getNumbers':
           {
              $result = $this->strUnset();
               break;
           }
           case 'getStrings':
           {
               $result = $this->intUnset();
               break;
           }
        }
        return $result;
    }

}

$filter = new Filter(['f', 2, 't', 7, 2, 'k']);

var_dump($filter->getNumbers()); //[2,7,2]
echo '<br>';
var_dump($filter->getStrings()); // ['f', 't', 'k']