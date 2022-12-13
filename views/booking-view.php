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
                    <div class="booking-info">
                        <div id="left">Booking ID: ' . $booking_ID . '</div>
                        <div id="right">' . $tickets . ' tickets</div>
                        <div id="left">Trip ID: ' . $trip_ID . '</div>
                        <div id="right">£' . $price . '</div>
                    </div>
                    <div class="buttons">
                        <a href="">Print</a>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </div>
                </div>';
    }
}
