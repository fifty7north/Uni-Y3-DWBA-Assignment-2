<?php

class TripView
{
    public $depart_time;
    public $arrive_time;
    public $depart_from;
    public $arrive_at;
   // public $seats_filled;
   // public $accessible_seat;

    public function __construct($depart_time, $arrive_time, $depart_from, $arrive_at, /*$seats_filled, $accessible_seat*/)
    {
        echo ' <div class="ferry">
                    <h2>' . substr($depart_time, 0, -3) . ' - ' . substr($arrive_time, 0, -3) . '</h2>
                    <h2>' . $depart_from . ' - ' . $arrive_at . '</h2>
                </div>';
    }
}
