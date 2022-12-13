<?php

class bookingView
{
    public $booking_ID;
    public $trip_ID;
    public $tickets;
    public $price;

    public function __construct($booking_ID, $trip_ID, $tickets, $price)
    {   
        echo '  <div class="booking">
                    ' . $booking_ID . '
                    ' . $trip_ID . '
                    ' . $tickets . '
                    ' . $price . '
                </div>';
    }
}
