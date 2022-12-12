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

    /*
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
    */

    $conn = connect();

    $stmt = $conn->prepare("SELECT * FROM ferry_trips WHERE trip_ID = ? LIMIT 1");
    $stmt->bind_param("s", $trip_ID);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    $conn->close();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $seats_remaining = 30 - $row["seats_filled"] - $total_tickets;
            //echo "seats remaining: ", $seats_remaining, '<br>';
        }
    } else {
        echo "Error: Failed to generate results. Please return to the booking page and resubmit your ticket info";
    }

    //scuffed price list lmao
    if($route_name == 'Mallaig - Eigg' OR $route_name == 'Eigg - Mallaig') {
        $adult_single_price = 12.60;
        $adult_return_price = 18.00;
    }
    else if($route_name == 'Eigg - Muck' OR $route_name == 'Muck - Eigg') {
        $adult_single_price = 7.00;
        $adult_return_price = 10.00;
    }
    else if($route_name == 'Eigg - Rum' OR $route_name == 'Rum - Eigg') {
        $adult_single_price = 11.20;
        $adult_return_price = 16.00;
    }
    else {
        $adult_single_price = 16.80;
        $adult_return_price = 24.00;        
    }

    $teen_single_price = 7.00;
    $teen_return_price = 10.00;
    $child_single_price = 4.90;
    $child_return_price = 7.00;
    $baby_single_price = 0;
    $baby_return_price = 0;

    $total_price = ($adult_single_price * $adult_single) + ($adult_return_price * $adult_return) + ($teen_single_price * $teen_single) + ($teen_return_price * $teen_return) + ($child_single_price * $child_single) + ($child_return_price * $child_return) + ($baby_single_price * $baby_single) + ($baby_return_price * $baby_return);
    //echo 'total price: ', $total_price;  

    //accessible seat check
    if (isset($_POST['accessible_seat'])) {
        $accessible_seat = 0;
    } else {
        $accessible_seat = 1;
    }  
?>