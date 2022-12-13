<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alba Cruises</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php'); ?>
    <main>
            <h1>Discover the Beauty of the Small Islands with Alba Cruises</h1>
            <a href=<?php
                if (isset($_SESSION['user_ID'])) {
                    echo '/pages/booking.php';
                } else {
                    echo '/pages/login.php';
                }
            ?>>Book Now</a>
            <span class="spacer"></span>
    </main>
    <footer>


    </footer>

</body>

</html>