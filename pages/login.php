<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <script defer src="/scripts/bouncer.min.js"></script>
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
                    echo '<li><a href="/pages/logout.php">Log Out</a></li>';
                } else {
                    echo '<li><a href="/pages/login.php">Log In</a></li>';
                }
                ?>
                <li><a href="/pages/staff-login.php">Staff</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/private/login-user.php');
              include_once($_SERVER['DOCUMENT_ROOT'] . '/views/error-message-view.php'); ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <input id="username" name="user_email" type="email" value="<?php if (isset($user_email)) echo $user_email;?>" placeholder="email" minlength="3" required>
             <?php new ErrorMessage($emailErr); ?>

            <input id="password" name="user_password" type="password" placeholder="password" minlength="8" required>
            <?php new ErrorMessage($passwordErr); ?>
            
            <input id="login-button" type="submit" value="Log In">

        </form>

        <a class="button" href="register.php">Register An Account Here</a>
    </main>
    <footer>


    </footer>

</body>


<script>
    document.addEventListener("DOMContentLoaded", function() {


        var validate = new Bouncer('form');
    });
</script>


</html>