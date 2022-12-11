<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Select</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php'); ?>
    <main>

        <h1>Date Select:</h1>
        <input type="date" name="date-select" min="2022-08-22" max="2022-09-04">

        <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/trip-controller.php');

        $tripController = new TripController();
        $tripController->invoke();
        ?>
    </main>