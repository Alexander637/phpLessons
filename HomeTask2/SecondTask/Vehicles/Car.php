<?php

namespace SecondTask\Vehicles;


use SecondTask\Interfaces\DoorsInterface;
use SecondTask\Interfaces\FireInterface;
use SecondTask\Interfaces\SpeedInterface;
use SecondTask\Interfaces\MotorInterface;
use SecondTask\Interfaces\WheelInterface;
use SecondTask\Interfaces\ProcessingInterface;

class Car extends Transport implements SpeedInterface, DoorsInterface, MotorInterface, WheelInterface, FireInterface, ProcessingInterface
{
    const CARDOOR = 4;
    const CARWHEEL = 4;
    const CARMOTOR = 'motor';
    const CARFIRE = 'false';

    public function __construct($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed)
    {
        $this->dataProcessing($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed);
    }

    public function dataProcessing($doorsCount, $wheelsCount, $motorType, $barrel,$accelerateSpeed, $decelerateSpeed)
    {
        if($doorsCount == self::CARDOOR && $wheelsCount == self::CARWHEEL && $motorType == self::CARMOTOR && $barrel == self::CARFIRE){
            $this->doorsCount = $doorsCount;
            $this->wheelsCount = $wheelsCount;
            $this->motorType = $motorType;
            $this->barrel = $barrel;


            $this->accelerate($accelerateSpeed);
            $this->decelerate($decelerateSpeed);
        } else {
            $this->doorsCount = null;
            $this->wheelsCount = null;
            $this->motorType = null;
            $this->barrel = null;
        }
    }

}