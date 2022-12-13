<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Log In</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <script defer src="/scripts/bouncer.min.js"></script>
</head>

<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php'); ?>
    <main>

        <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/private/login-staff.php');
              include_once($_SERVER['DOCUMENT_ROOT'] . '/views/error-message-view.php'); ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <input id="username" name="username" type="email" value="<?php if (isset($username)) echo $username;?>" placeholder="email" minlength="3" required>
             <?php new ErrorMessage($emailErr); ?>

            <input id="password" name="password" type="password" placeholder="password" minlength="8" required>
            <?php new ErrorMessage($passwordErr); ?>
            
            <input id="login-button" type="submit" value="Log In">

        </form>

        <a class="button" href="register-temp.php">Register An Account Here</a>
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