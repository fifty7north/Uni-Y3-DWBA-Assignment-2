<?php

class Booking {   
    public $booking_ID;
    public $trip_ID;
    public $tickets;
    public $price;   
  
    public function __construct($booking_ID, $trip_ID, $tickets, $price)   
    {   
        $this->booking_ID = $booking_ID;
        $this->trip_ID = $trip_ID;
        $this->tickets = $tickets;
        $this->price = $price;   
    }   
}
