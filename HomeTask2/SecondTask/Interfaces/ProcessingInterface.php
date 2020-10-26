<?php

namespace SecondTask\Interfaces;

interface ProcessingInterface
{
    public function dataProcessing($doorsCount, $wheelsCount, $motorType, $barrel, $accelerateSpeed, $decelerateSpeed);
}