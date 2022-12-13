<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/models/report-model.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/report-list-view.php');

class ReportController
{

    public $bookingModel;
    public function __construct()
    {
        $this->bookingModel = new ReportModel();
    }


    public function invoke()
    {
        $bookings = $this->bookingModel->getAllBookings();

        if (count($bookings) > 0) {
            $bookingList = new ReportListView($bookings);
        } else {
            echo '
            <h1 class="no-bookings">You have no bookings</h1>
            ';
        }


    }
}
