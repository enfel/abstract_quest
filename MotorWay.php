<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane=4;
    protected int $maxSpeed=130;


    public function addVehicle(Vehicle $car): array
    {
        if($car!== Bike && $car!== Skateboard)
        {
            array_push($currentVehicules, $car);
        }
        return $currentVehicules;
    }

}
