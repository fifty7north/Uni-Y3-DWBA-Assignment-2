<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/models/trip-model.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/card-grid-view.php');

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
            $tripGrid = new CardGridView($trips);
        } else {
            echo 'There are no trips in the database';
        }


    }
}
