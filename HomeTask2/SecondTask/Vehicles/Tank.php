<?php

namespace SecondTask\Vehicles;


use SecondTask\Interfaces\DoorsInterface;
use SecondTask\Interfaces\FireInterface;
use SecondTask\Interfaces\SpeedInterface;
use SecondTask\Interfaces\MotorInterface;
use SecondTask\Interfaces\WheelInterface;
use SecondTask\Interfaces\ProcessingInterface;

class Tank extends Transport implements SpeedInterface, DoorsInterface, MotorInterface,WheelInterface, FireInterface, ProcessingInterface
{
    const TANKDOOR = 0;
    const TANKWHEEL = 2;
    const TANKMOTOR = 'motor';
    const TANKFIRE = 'true';

    public function __construct($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed)
    {
       $this->dataProcessing($doorsCount, $wheelsCount, $motorType, $barrel,$accelerateSpeed, $decelerateSpeed);
    }

    public function dataProcessing($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed)
    {
        if ($doorsCount == self::TANKDOOR && $wheelsCount == self::TANKWHEEL && $motorType == self::TANKMOTOR && $barrel == self::TANKFIRE){
            $this->doorsCount = $doorsCount;
            $this->wheelsCount = $wheelsCount;
            $this->motorType = $motorType;
            $this->barrel = $barrel;


            $this->accelerate($accelerateSpeed);
            $this->decelerate($decelerateSpeed);
        }
    }
}