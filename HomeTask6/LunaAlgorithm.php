<?php

class LunaAlgorithm
{
    public $number;
    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = strrev(preg_replace('/[^\d]+/', '', $number));
    }

    public function algorithm()
    {
        $sum = 0;

        for ($i = 0, $j = strlen($this->number); $i < $j; $i++) {

            if (($i % 2) == 0) {
                $val = $this->number[$i];
            } else {
                $val = $this->number[$i] * 2;

                if ($val > 9)  {
                    $val -= 9;
                }
            }

            $sum += $val;
        }

        return (($sum % 10) === 0);
    }
}

$lunaAlgorithm = new LunaAlgorithm();
$lunaAlgorithm->setNumber('5106 2110 1025 5079');

var_dump($lunaAlgorithm->algorithm());