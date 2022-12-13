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
                        <form>
                            <input type=submit value=Print class="submit"></input>
                        </form>
                        <form>
                            <input type=submit value=Edit class="submit"></input>
                        </form>
                        <form method="post" action="/pages/delete-confirmation.php">
                            <input name="booking_ID" id="hidden" value= "' . $booking_ID . '" readonly>
                            <input name="trip_ID" id="hidden" value= "' . $trip_ID . '" readonly>
                            <input name="tickets" id="hidden" value= "' . $tickets . '" readonly>
                            <input name="price" id="hidden" value= "' . $price . '" readonly>
                            <input type=submit value=Delete class="submit"></input>
                        </form>
                    </div>
                </div>';
    }
}
