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
                echo '/pages/booking.php';
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
    <?php
    if (isset($_SESSION['username']) && ($_SESSION['total_bookings'] > 5))  {
        echo '
        <div class="ceilidh-invite-link">
            As one of our loyal customers, we\'ve invited you to our end of season ceilidh! 
            <a href="/pages">Click here</a>
            to learn more.
        </div>
        ';
    }
    ?>
</header>