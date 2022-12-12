<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

    $trip_ID = $_POST['trip_ID'];
    $accessible_seat = $_POST['accessible_seat'];
    $seats_filled = 30 - $_POST['seats_remaining'];
    $total_price = $_POST['total_price'];

    //no overwriting accessible seats
    $conn = connect();
    $stmt = $conn->prepare("SELECT accessible_seats FROM ferry_trips WHERE trip_ID = ? LIMIT 1");
    $stmt->bind_param("s", $trip_ID);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $conn->close();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $accessible_seat_check = $row["accessible_seats"];
            //echo "seats remaining: ", $seats_remaining, '<br>';
        }
    } else {
        echo "Error: Failed to generate results. Please return to the booking page and resubmit your ticket info";
    }
    if ($accessible_seat == 1 AND $accessible_seat_check == 0) {
        $accessible_seat = 0;

    }

    echo $trip_ID;    echo'<br>';
    echo $accessible_seat;    echo'<br>';
    echo $seats_filled;    echo'<br>';
    echo $total_price;    echo'<br>';

    //update trip table
    $conn = connect();

    $stmt = $conn->prepare("UPDATE ferry_trips SET seats_filled = ?, accessible_seats = ? WHERE trip_ID = ?");
    $stmt->bind_param("sss", $seats_filled, $accessible_seat, $trip_ID);
    $stmt->execute();

    $conn->close();

?>