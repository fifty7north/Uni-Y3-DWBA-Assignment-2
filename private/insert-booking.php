<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

    $trip_ID = $_POST['trip_ID'];
    $accessible_seat = $_POST['accessible_seat'];
    $seats_remaining = $_POST['seats_remaining'];
    $total_price = $_POST['total_price'];

    echo $trip_ID;    echo'<br>';
    echo $accessible_seat;    echo'<br>';
    echo $seats_remaining;    echo'<br>';
    echo $total_price;    echo'<br>';

    
?>