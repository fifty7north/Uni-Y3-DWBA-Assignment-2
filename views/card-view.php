<?php

class CardView
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
                    <img src="/images/logo.png" alt="A vector drawing of a book" title="' . $depart_time . '">
                    <h2>' . $depart_time . '</h2>
                    <h3>' . $arrive_time . '</h3>
                    <h4>' . $depart_from . '</h4>
                    <h4>' . $arrive_at . '</h4>
                </div>';
    }
}
