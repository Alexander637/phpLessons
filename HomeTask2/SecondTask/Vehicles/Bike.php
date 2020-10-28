<?php

namespace SecondTask\Vehicles;

use SecondTask\Interfaces\DoorsInterface;
use SecondTask\Interfaces\FireInterface;
use SecondTask\Interfaces\SpeedInterface;
use SecondTask\Interfaces\MotorInterface;
use SecondTask\Interfaces\WheelInterface;
use SecondTask\Interfaces\ProcessingInterface;

class Bike extends Transport implements  ProcessingInterface, MotorInterface, WheelInterface, FireInterface, SpeedInterface, DoorsInterface
{
    const BIKEDOOR = 0;
    const BIKEWHEEL = 2;
    const BIKEMOTOR = 'muscle';
    const BIKEFIRE = 'false';

    public function __construct($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed)
    {
        $this->dataProcessing($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed);
    }

    public function dataProcessing($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed)
    {
        if ($doorsCount == self::BIKEDOOR && $wheelsCount == self::BIKEWHEEL && $motorType == self::BIKEMOTOR && $barrel == self::BIKEFIRE){
            $this->doorsCount = $doorsCount;
            $this->wheelsCount = $wheelsCount;
            $this->motorType = $motorType;
            $this->barrel = $barrel;

            $this->accelerate($accelerateSpeed);
            $this->decelerate($decelerateSpeed);
        }
    }
}

