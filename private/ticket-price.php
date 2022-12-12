<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');
    $adult_single = $_POST["adult-single"];
    $adult_return = $_POST["adult-return"];
    $teen_single = $_POST["teen-single"];
    $teen_return = $_POST["teen-return"];
    $child_single = $_POST["child-single"];
    $child_return = $_POST["child-return"];
    $baby_single = $_POST["baby-single"];
    $baby_return = $_POST["baby-return"];
    $trip_ID = $_POST['trip_ID'];
    $route_name = $_POST['route_name'];

    $total_tickets = $adult_single + $adult_return + $teen_single + $teen_return + $child_single + $child_return + $baby_single + $baby_return;

    echo "adult-single: ", $adult_single, "<br>";
    echo "adult-return: ", $adult_return, "<br>";
    echo "teen-single: ", $teen_single, "<br>";
    echo "teen-return: ", $teen_return, "<br>";
    echo "child-single: ", $child_single, "<br>";
    echo "child-return: ", $child_return, "<br>";
    echo "baby-single: ", $baby_single, "<br>";
    echo "baby-return: ", $baby_return, "<br>";
    echo "trip ID: ", $trip_ID, "<br>";
    echo "route name: ", $route_name, "<br>";
    echo "total tickets: ", $total_tickets, "<br>";

    $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM ferry_trips WHERE trip_ID = ? LIMIT 1");
        $stmt->bind_param("s", $trip_ID);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result

        $conn->close();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $seats_remaining = 30 + $row["seats_filled"] - $total_tickets;
                echo "seats remaining: ", $seats_remaining;
            }
        } else {
            echo "Error: Failed to generate results. Please return to the booking page and resubmit your ticket info";
        }
?>