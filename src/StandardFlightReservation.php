<?php

namespace App;

class StandardFlightReservation implements FlightReservation
{
    public function calculatePrice(): int
    {
        // Fetch the price from the database

        return 300;
    }
}