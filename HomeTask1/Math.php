<?php


class Math
{
   public function calculate($num1, $num2, $i)
   {
       $res = 0;

       if (is_string($i) && !is_string($num1) && !is_string($num2)) {

           switch ($i) {
               case '+':{
                   $res = $num1 + $num2;
                   break;
               }

               case '-':
               {
                   $res = $num1 - $num2;
                   break;
               }

               case '*':
               {
                   $res = $num1 * $num2;
                   break;
               }

               case '/':
               {
                   if($num2!= 0){
                       $res = $num1 / $num2;
                   }else{
                       $res = 'Error';
                   }
                   break;
               }
           }
       }
       else{
           $res = 'Error';
       }

       return $res;
   }

    public function calcFactorial($number)
    {
        for ($i = $number - 1; $i > 0; $i--){
            $number *= $i;
        }

        return $number;
    }
}

$math = new Math();
var_dump($math->calcFactorial(5));
echo '<br>';
var_dump($math->calculate(10, 6, '-'));