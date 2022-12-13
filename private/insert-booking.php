<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

    $trip_ID = $_POST['trip_ID'];
    $accessible_seat = $_POST['accessible_seat'];
    $seats_filled = 30 - $_POST['seats_remaining'];
    $total_price = $_POST['total_price'];
    $total_tickets = $_POST['total_tickets'];

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

    //insert into booking table
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO bookings (trip_ID, user_ID, tickets, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $trip_ID, $_SESSION['user_ID'], $total_tickets, $total_price);
    $stmt->execute();
    $conn->close();

    //update trip table
    $conn = connect();
    $stmt = $conn->prepare("UPDATE ferry_trips SET seats_filled = ?, accessible_seats = ? WHERE trip_ID = ?");
    $stmt->bind_param("sss", $seats_filled, $accessible_seat, $trip_ID);
    $stmt->execute();
    $conn->close();

    //get customer total bookings and update it
    $updated_total_bookings = $_SESSION['total_bookings'] + $total_tickets;

    $conn = connect();
    $stmt = $conn->prepare("UPDATE customer_login SET total_bookings = ? WHERE user_ID = ?");
    $stmt->bind_param("ss", $updated_total_bookings, $_SESSION['user_ID']);
    $stmt->execute();
    $conn->close();
    
    $_SESSION['total_bookings'] = $updated_total_bookings;
?>