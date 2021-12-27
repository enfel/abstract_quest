<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    protected int $nbLane=2;
    protected int $maxSpeed=50;

    public function addVehicle(Vehicle $vehicle): array
    {
        array_push($currentVehicules, $vehicle);
        return $currentVehicules;
    }

}
