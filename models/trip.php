<?php

class Trip {   
    public $trip_ID;
    public $season_ID;
    public $depart_date;
    public $depart_time;   
    public $arrive_time;   
    public $depart_from; 
    public $arrive_at; 
    public $seats_filled;
    public $accessible_seats;
  
    public function __construct($trip_ID, $season_ID, $depart_date, $depart_time, $arrive_time, $depart_from, $arrive_at, $seats_filled, $accessible_seats)   
    {   
        $this->trip_ID = $trip_ID;
        $this->season_ID = $season_ID;
        $this->depart_date = $depart_date;
        $this->depart_time = $depart_time;   
        $this->arrive_time = $arrive_time;   
        $this->depart_from = $depart_from;   
        $this->arrive_at = $arrive_at;
        $this->seats_filled = $seats_filled;
        $this->accessible_seats = $accessible_seats;
    }   
}
