<?php

class TripView
{
    public $trip_ID;
    public $depart_time;
    public $arrive_time;
    public $route_name;
    public $seats_filled;
    public $accessible_seats;

    public function __construct($trip_ID, $depart_time, $arrive_time, $route_name, $seats_filled, $accessible_seats)
    {   
        echo '  <div class="ferry">
                    <div class="info">
                        <p>' . substr($depart_time, 0, -3) . ' - ' . substr($arrive_time, 0, -3) . '</p>
                        <p>' . $route_name . '</p>
                        <p>' . $trip_ID . '</p>
                    </div>
                    <form method="post" action="booking-payment.php" class="ticket-form">
                        <h1>Single</h1>
                        <h1>Return</h1>
                        <div>
                            <label>Adult: </label><br>
                            <input name ="adult-single" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Adult: </label><br>
                            <input name ="adult-return" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 11-16: </label><br>
                            <input name ="teen-single" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 11-16: </label><br>
                            <input name ="teen-return" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 3-10: </label><br>
                            <input name ="child-single" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 3-10: </label><br>
                            <input name ="child-return" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 0-2: Free</label><br>
                            <input name ="baby-single" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 0-2: Free</label><br>
                            <input name ="baby-return" type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        ' . (($accessible_seats == 1)?"
                        <div class='accessible-seat-noti'>
                            <label>Accessible seating is available on this trip. Tick the checkbox below if you require an accessible seat</label><br>
                            <input type='checkbox'>
                        </div>
                        ":"") . '
                        <input name="trip_ID" id="hidden" value= "' . $trip_ID . '" readonly>
                        <input type="submit">
                    </form>
                </div>';
    }
}
