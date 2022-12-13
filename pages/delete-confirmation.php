<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Deletion</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/booking-payment.css">
</head>

<body>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pages/header.php'); ?>
    <main>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/private/delete-confirmation.php'); ?> 
        <h1>Are you sure you want to delete the following booking:</h1>
        <div class='info'>   
            <p>Booking ID: <?php echo $booking_ID;?></p>
            <p>Trip ID: <?php echo $trip_ID;?></p>
            <p>Tickets: <?php echo $tickets;?></p>
            <p>Price: £<?php echo $price;?></p>
        </div>
        <form method="post" action="/pages/delete-booking.php">
            <input name="booking_ID" id="hidden" value= "<?php echo $booking_ID;?>" readonly>
            <input name="trip_ID" id="hidden" value= "<?php echo $trip_ID;?>" readonly>
            <input name="tickets" id="hidden" value= "<?php echo $tickets;?>" readonly>
            <input name="price" id="hidden" value= "<?php echo $price;?>" readonly>
            <input type=submit value=Delete class="submit"></input>
    </form>
    </main>
    <footer>


    </footer>

</body>

</html>