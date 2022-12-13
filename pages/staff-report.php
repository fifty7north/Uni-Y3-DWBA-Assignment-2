<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/staff-report.css">
</head>

<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php'); ?>
    <main>
        <h1>Booking Report:</h1>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/report-controller.php');
                $tripController = new ReportController();
                $tripController->invoke();
        ?>
    </main>
    <footer>


    </footer>

</body>

</html>