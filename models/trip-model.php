<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/trip.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

class TripModel
{
    
    public function getAllTrips()
    {

        $conn = connect();

        $sql = "SELECT * FROM ferry_trips";
        $result = $conn->query($sql);

        $AllTrips = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $nextTrip = new Trip(
                    $row["trip_ID"],
                    $row["depart_date"],
                    $row["depart_time"],
                );

                array_push($AllTrips, $nextTrip);
            }
        }

        $conn->close();
        return $AllTrips;
    }
}
