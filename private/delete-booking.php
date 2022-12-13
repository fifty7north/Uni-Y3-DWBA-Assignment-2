<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

    $booking_ID = $_POST["booking_ID"];
    $trip_ID = $_POST["trip_ID"];
    $tickets = $_POST["tickets"];
    $price = $_POST["price"];

    //delete from booking table
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM bookings WHERE booking_ID = ?");
    $stmt->bind_param("s", $booking_ID);
    $stmt->execute();
    $conn->close();

    //calculate seats filled after ticket deletion
    $conn = connect();
    $stmt = $conn->prepare("SELECT seats_filled FROM ferry_trips WHERE trip_ID = ? LIMIT 1");
    $stmt->bind_param("s", $trip_ID);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $conn->close();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $seats_filled = $row["seats_filled"];
            //echo "seats remaining: ", $seats_remaining, '<br>';
        }
    } else {
        echo "Error: Failed to generate results. Please return to the booking page and resubmit your ticket info";
    }
    $seats_after_delete = $seats_filled - $tickets;

    //update trip table
    $conn = connect();
    $stmt = $conn->prepare("UPDATE ferry_trips SET seats_filled = ? WHERE trip_ID = ?");
    $stmt->bind_param("ss", $seats_after_delete, $trip_ID);
    $stmt->execute();
    $conn->close();

    //get customer total bookings and update it
    $updated_total_bookings = $_SESSION['total_bookings'] - $tickets;

    $conn = connect();
    $stmt = $conn->prepare("UPDATE customer_login SET total_bookings = ? WHERE user_ID = ?");
    $stmt->bind_param("ss", $updated_total_bookings, $_SESSION['user_ID']);
    $stmt->execute();
    $conn->close();

    $_SESSION['total_bookings'] = $updated_total_bookings;
?>