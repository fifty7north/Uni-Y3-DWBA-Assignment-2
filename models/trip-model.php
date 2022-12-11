<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/trip.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

class TripModel
{
    
    public function getAllTrips()
    {

        $conn = connect();

        $sql = "SELECT * FROM ferry_trips WHERE depart_date = '2022-08-31'";
        $result = $conn->query($sql);

        $AllTrips = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $nextTrip = new Trip(
                    $row["trip_ID"],
                    $row["season_ID"],
                    $row["depart_date"],
                    $row["depart_time"],
                    $row["arrive_time"],
                    $row["depart_from"],
                    $row["arrive_at"],
                    $row["seats_filled"],
                    $row["accessible_seats"]
                );

                array_push($AllTrips, $nextTrip);
            }
        }

        $conn->close();
        return $AllTrips;
    }
}
