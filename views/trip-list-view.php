<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/trip-view.php');

class TripListView
{

    public $arrayOfTrips;

    public function __construct($arrayOfTrips)
    {
        echo '<section class="trip-list">';

        foreach ($arrayOfTrips as $singleTrip) {
            $newTrip = new TripView($singleTrip->trip_ID, $singleTrip->depart_time, $singleTrip->arrive_time, $singleTrip->route_name, $singleTrip->seats_filled, $singleTrip->accessible_seats);
        }

        echo '</section>';
    }
}
