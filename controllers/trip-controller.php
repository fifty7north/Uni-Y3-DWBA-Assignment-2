<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/models/trip-model.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/trip-list-view.php');

class TripController
{

    public $tripModel;
    public function __construct()
    {
        $this->tripModel = new TripModel();
    }


    public function invoke()
    {
        $trips = $this->tripModel->getAllTrips();

        if (count($trips) > 0) {
            $tripList = new TripListView($trips);
        } else {
            echo '
            <div class="no-ferries">There are no available on this date. Please select another date.</div>
            ';
        }


    }
}
