<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/trip.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

class TripModel
{
    
    public function getAllTrips()
    {
        $date_select = $_POST['date-select'];
        echo $date_select;

        $conn = connect();

        //$sql = "SELECT * FROM ferry_trips WHERE depart_date = $date_select";
        //$result = $conn->query($sql);

        $stmt = $conn->prepare("SELECT * FROM ferry_trips WHERE depart_date = ?");
        $stmt->bind_param("s", $date_select);
        $stmt->execute();
        $result = $stmt->get_result();

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
