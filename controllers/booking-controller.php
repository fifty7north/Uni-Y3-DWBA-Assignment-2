<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/models/booking-model.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/booking-list-view.php');

class BookingController
{

    public $bookingModel;
    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }


    public function invoke()
    {
        $bookings = $this->bookingModel->getAllBookings();

        if (count($bookings) > 0) {
            $bookingList = new BookingListView($bookings);
        } else {
            echo '
            <h1 class="no-bookings">You have no bookings</h1>
            ';
        }


    }
}
