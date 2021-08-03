<?php

use App\ExtraLegroom;
use App\HoldLuggage;
use App\StandardFlightReservation;
use PHPUnit\Framework\TestCase;

class FlightReservationTest extends TestCase
{
    /** @test */
    public function a_flight_reservation_can_be_decorated()
    {
        // SETUP
        $reservation = new StandardFlightReservation();
        $reservation = new ExtraLegroom($reservation);
        $reservation = new HoldLuggage($reservation);

        // DO SOMETHING
        $totalCost = $reservation->calculatePrice();

        // MAKE ASSERTIONS
        $this->assertEquals(400, $totalCost); // 300 + 40 + 60
    }
}





