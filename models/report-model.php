<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/report.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

class ReportModel
{
    
    public function getAllBookings()
    {
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM ferry_trips");
        $stmt->execute();
        $result = $stmt->get_result();

        $Allbookings = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $nextbooking = new Report(
                    $row["trip_ID"],
                    $row["depart_date"],
                    $row["depart_time"],
                    $row["arrive_time"],
                    $row["route_name"],
                    $row["seats_filled"],
                    $row["accessible_seats"],
                );

                array_push($Allbookings, $nextbooking);
            }
        }

        $conn->close();
        return $Allbookings;
    }
}
