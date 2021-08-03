<?php

namespace App;

abstract class FlightReservationDecorator implements FlightReservation
{
    protected FlightReservation $flightReservation;

    public function __construct(FlightReservation $flightReservation)
    {
        $this->flightReservation = $flightReservation;
    }
}