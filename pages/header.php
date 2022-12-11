<header>
    <nav>
        <a href="/index.php"><img src="/images/logo.png" alt="Logo"></a>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href=<?php
            if (isset($_SESSION['username'])) {
                echo '/pages';
            } else {
                echo '/pages/login.php';
            }
            ?>>Book Now</a></li>
            <li><a href=<?php
            if (isset($_SESSION['username'])) {
                echo '/pages';
            } else {
                echo '/pages/login.php';
            }
            ?>>My Bookings</a></li>
            <li><a href="/pages">Itinerary</a></li>
            <li><a href="/pages/about-us.php">About</a></li>
            <?php 
            if (isset($_SESSION['username'])) {
                echo '<li><a href="/pages/logout.php">Log Out</a></li>';
            } else {
                echo '<li><a href="/pages/login.php">Log In</a></li>';
            }
            ?>
            <li><a href="/pages/staff-login.php">Staff</a></li>
        </ul>
    </nav>
</header>