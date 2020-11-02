<?php

class Concatenator
{
    public static function __callStatic( $name, $arguments)
    {
        $strReplace = str_replace(' ', '+', $arguments);
        $strImplode = implode($strReplace);
        $strLower = strtolower($strImplode);

        return $strLower;
    }
}

$concatenated = Concatenator::concat('I am concatenated');

echo $concatenated;

