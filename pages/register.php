<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="/css/style.css">
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

        <h1>Please enter your log in details</h1>

        <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/private/register-user.php');
              include_once($_SERVER['DOCUMENT_ROOT'] . '/views/error-message-view.php'); ?>

        <!-- The post will be sent to the same page the form is in
         The action attribute can't be left blank or it will result in invalid code  https://html.spec.whatwg.org/#attr-fs-action
         Why PHP_SELF? See this: https://www.w3schools.com/php/php_form_validation.asp
         Not including an action attribute opens the risk of a click jacking attack: http://blog.andlabs.org/2010/03/bypassing-csrf-protections-with.html -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <input id="forename" name="forename" type="text" value="<?php if (isset($forename)) echo $forename; ?>" placeholder="Forename" minlength="1" required><br>

            <input id="surname" name="surname" type="text" value="<?php if (isset($surname)) echo $surname; ?>" placeholder="Surname" minlength="1" required><br>

            <input id="username" name="user_email" type="email" value="<?php if (isset($user_email)) echo $user_email; ?>" placeholder="email" minlength="3" required>
            <?php new ErrorMessage($emailErr); ?>

            <input id="password" name="user_password" type="password" placeholder="password" minlength="8" required><br>
            <?php new ErrorMessage($passwordErr); ?>

            <input id="password2" name="user_password2" type="password" placeholder="confirm password" minlength="8" required data-bouncer-match="#password">
            <?php new ErrorMessage($password2Err); ?>

            <input type="submit" value="Create Account">

        </form>

    </main>
    <footer>


    </footer>

</body>


<script>
    document.addEventListener("DOMContentLoaded", function() {


        var validate = new Bouncer('form', {

            customValidations: {
                valueMismatch: function(field) {

                    //check the current input field to see if it has the attribute:
                    var selector = field.getAttribute('data-bouncer-match');
                    if (!selector) return false

                    //find the 2nd input that it should match
                    var otherField = field.form.querySelector(selector);
                    if (!otherField) return false;

                    // Compare the two field values
                    // We use a negative comparison here because if they do match, the field validates
                    // We want to return true for failures, which can be confusing
                    return otherField.value !== field.value;
                }
            },
            messages: {
                valueMismatch: 'Please make sure your passwords match.',
            }
        });
    });
</script>

</html>