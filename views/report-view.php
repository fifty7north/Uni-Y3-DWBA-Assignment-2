<?php

class ReportView
{
    public $trip_ID;
    public $depart_date;
    public $depart_time; 
    public $arrive_time; 
    public $route_name; 
    public $seats_filled; 
    public $accessible_seats;  

    public function __construct($trip_ID, $depart_date, $depart_time, $arrive_time, $route_name, $seats_filled, $accessible_seats)
    {   
        echo '  <div class="booking">
                    <div class="booking-info">
                        <div>Trip ID: ' . $trip_ID . '</div>
                        <div>Route: ' . $route_name . '</div>
                        <div>Date: ' . $depart_date . '</div>
                        <div>Departure Time: ' . $depart_time . '</div>
                        <div>Arrival Time: ' . $arrive_time . '</div>
                        <div>Seats Filled: ' . $seats_filled . '</div>
                        <div>Accessible Seats Remaining: ' . $accessible_seats . '</div>
                    </div>
                    <div class="buttons">
                        <a href="">Print</a>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </div>
                </div>';
    }
}
