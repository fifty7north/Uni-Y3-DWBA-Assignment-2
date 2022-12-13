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
            <div class="no-ferries">There are no available on this date. Please select another date.</div>
            ';
        }


    }
}
