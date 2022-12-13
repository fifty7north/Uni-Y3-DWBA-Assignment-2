<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/booking.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

class BookingModel
{
    
    public function getAllBookings()
    {
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM bookings WHERE user_ID = ?");
        $stmt->bind_param("s", $_SESSION['user_ID']);
        $stmt->execute();
        $result = $stmt->get_result();

        $Allbookings = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $nextbooking = new Booking(
                    $row["booking_ID"],
                    $row["trip_ID"],
                    $row["tickets"],
                    $row["price"],
                );

                array_push($Allbookings, $nextbooking);
            }
        }

        $conn->close();
        return $Allbookings;
    }
}
