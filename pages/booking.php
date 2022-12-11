<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Select</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/booking.css">
</head>

<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php'); ?>
    <main>
        <div class="date-select-form">
            <h1>Please Select a Date:</h1>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <input type="date" name="date-select" min="2022-08-22" max="2022-09-04" required>
                <input type="submit" value="View Ferries">
            </form>
        </div>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/trip-controller.php');
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $date_select = $_POST['date-select'];
                if (empty($date_select)) {
                    echo "Please select a date";
                } else {
                    $tripController = new TripController();
                    $tripController->invoke();

                }
              }
        ?>

        <?php


        //$tripController = new TripController();
        //$tripController->invoke();
        ?>
    </main>