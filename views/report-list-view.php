<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/report-view.php');

class ReportListView
{

    public $arrayOfbookings;

    public function __construct($arrayOfbookings)
    {
        echo '<section class="booking-list">';

        foreach ($arrayOfbookings as $singlebooking) {
            $newbooking = new ReportView($singlebooking->trip_ID, $singlebooking->depart_date, $singlebooking->depart_time, $singlebooking->arrive_time, $singlebooking->route_name, $singlebooking->seats_filled, $singlebooking->accessible_seats);
        }

        echo '</section>';
    }
}
