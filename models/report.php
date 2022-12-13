<?php

class Report {   
    public $trip_ID;
    public $depart_date;
    public $depart_time; 
    public $arrive_time; 
    public $route_name; 
    public $seats_filled; 
    public $accessible_seats;   
  
    public function __construct($trip_ID, $depart_date, $depart_time, $arrive_time, $route_name, $seats_filled, $accessible_seats)   
    {   
        $this->trip_ID = $trip_ID;
        $this->depart_date = $depart_date;
        $this->depart_time = $depart_time;   
        $this->arrive_time = $arrive_time;
        $this->route_name = $route_name;
        $this->seats_filled = $seats_filled;
        $this->accessible_seats = $accessible_seats;
    }   
}
