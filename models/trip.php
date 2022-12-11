<?php

class Trip {   
    public $trip;   
    public $date;   
    public $departure_time;   
  
    public function __construct($trip, $date, $departure_time)   
    {   
        $this->trip = $trip;   
        $this->date = $date;   
        $this->departure_time = $departure_time;   
    }   
}
