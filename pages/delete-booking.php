<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmed</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/confirm.css">
</head>

<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php'); ?>
    <main>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/private/delete-booking.php'); ?> 
        <h1>Booking Deleted!</h1>
        <a href="/pages/my-bookings.php">Return to My Bookings</a>
    </main>
    <footer>


    </footer>

</body>

</html>