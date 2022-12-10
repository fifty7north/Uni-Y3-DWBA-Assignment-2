<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alba Cruises</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <header>
        <nav>
            <a href="/index.php"><img src="/images/logo.png" alt="Logo"></a>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/pages">Book Now</a></li>
                <li><a href="/pages">My Bookings</a></li>
                <li><a href="/pages">Itinerary</a></li>
                <li><a href="/pages/about-us.php">About</a></li>
                <?php 
                if (isset($_SESSION['username'])) {
                    echo '<li>Welcome ' . $_SESSION['username'] . '</li>';
                    echo '<li><a href="/pages/logout.php">Log Out</a></li>';
                } else {
                    echo '<li><a href="/pages/login.php">Log In</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <main>

    </main>
    <footer>


    </footer>

</body>

</html>