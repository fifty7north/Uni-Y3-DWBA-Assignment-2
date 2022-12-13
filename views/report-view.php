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
        echo '  <div class="ferry">
                    <div class="ferry-info">
                        <div class="info-title">Trip ID: </div>
                        <div class="info-variable">' . $trip_ID . '</div>
                        <div class="info-title">Route: </div>
                        <div class="info-variable">' . $route_name . '</div>
                        <div class="info-title">Date: </div>
                        <div class="info-variable">' . $depart_date . '</div>
                        <div class="info-title">Departure Time: </div>
                        <div class="info-variable">' . $depart_time . '</div>
                        <div class="info-title">Arrival Time: </div>
                        <div class="info-variable">' . $arrive_time . '</div>
                        <div class="info-title">Seats Filled: </div>
                        <div class="info-variable">' . $seats_filled . '</div>
                        <div class="info-title">Accessible Seats: </div>
                        <div class="info-variable">' . $accessible_seats . '</div>
                    </div>
                    <a href="">Print</a>
                </div>';
    }
}
