<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/booking-view.php');

class BookingListView
{

    public $arrayOfbookings;

    public function __construct($arrayOfbookings)
    {
        echo '<section class="booking-list">';

        foreach ($arrayOfbookings as $singlebooking) {
            $newbooking = new bookingView($singlebooking->booking_ID, $singlebooking->trip_ID, $singlebooking->tickets, $singlebooking->price);
        }

        echo '</section>';
    }
}
