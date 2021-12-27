<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane=1;
    protected int $maxSpeed=10;

    public function addVehicle(Vehicle $bike): array
    {
        if($bike==Bike || $bike==Skateboard)
        {
            array_push($currentVehicules, $bike);
        }
        return $currentVehicules;
    }
}
