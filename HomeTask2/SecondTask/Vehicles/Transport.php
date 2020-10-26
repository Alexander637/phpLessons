<?php

namespace SecondTask\Vehicles;

use SecondTask\Interfaces\DoorsInterface;
use SecondTask\Interfaces\FireInterface;
use SecondTask\Interfaces\SpeedInterface;
use SecondTask\Interfaces\MotorInterface;
use SecondTask\Interfaces\WheelInterface;

abstract class Transport implements SpeedInterface, DoorsInterface, MotorInterface,WheelInterface, FireInterface
{
    public $doorsCount;
    public $wheelsCount;
    public $motorType;
    public $barrel;
    public $accelerateSpeed;
    public $decelerateSpeed;

    public function accelerate($speed)
    {
        $this->accelerateSpeed = $speed;
    }

    public function decelerate($speed)
    {
        if($this->accelerateSpeed > $speed){
            $this->decelerateSpeed = $speed;
        }
    }

    public function getAccelerate()
    {
       return $this->accelerateSpeed;
    }

    public function getDecelerate()
    {
        return $this->decelerateSpeed;
    }


    public function getDoorsCount()
    {
        return $this->doorsCount;
    }

    public function getMotorType()
    {
        return $this->motorType;
    }


    public function getWheelCount()
    {
        return $this->wheelsCount;
    }

    public function fire()
    {
        return $this->barrel;
    }

}