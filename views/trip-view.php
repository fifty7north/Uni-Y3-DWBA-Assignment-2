<?php

class TripView
{
    public $depart_time;
    public $arrive_time;
    public $depart_from;
    public $arrive_at;
    public $seats_filled;
    public $accessible_seats;

    public function __construct($depart_time, $arrive_time, $depart_from, $arrive_at, $seats_filled, $accessible_seats)
    {
        echo '  <div class="ferry">
                    <div class="info">
                        <p>' . substr($depart_time, 0, -3) . ' - ' . substr($arrive_time, 0, -3) . '</p>
                        <p>' . $depart_from . ' - ' . $arrive_at . '</p>
                    </div>
                    <form class="ticket-form">
                        <h1>Single</h1>
                        <h1>Return</h1>
                        <div>
                            <label>Adult: </label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Adult: </label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 11-16: </label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 11-16: </label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 3-10: </label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 3-10: </label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 0-2: Free</label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        <div>
                            <label>Ages 0-2: Free</label><br>
                            <input type="number" placeholder=0 min=0 max = ' . 30 - $seats_filled .'>
                        </div>
                        ' . (($accessible_seats == 1)?"
                        <div class='accessible-seat-noti'>
                            <label>Accessible seating is available on this trip. Tick the checkbox below if you require an accessible seat</label><br>
                            <input type='checkbox'>
                        </div>
                        ":"") . '
                        <input type="submit">
                    </form>
                </div>';
    }
}
