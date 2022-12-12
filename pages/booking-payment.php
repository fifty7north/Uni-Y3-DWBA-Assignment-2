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
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/private/ticket-price.php'); ?> 
        <h1>Confirm your booking details:</h1>
        <div>
            <p>Route: <?php echo $route_name;?></p>   
            <?php
                if ($adult_single > 0) {
                    echo '<p>Adult single tickets: ' . $adult_single . '</p>';
                }

                if ($adult_return > 0) {
                    echo '<p>Adult return tickets: ' . $adult_return . '</p>';
                }

                if ($teen_single > 0) {
                    echo '<p>Teen single tickets: ' . $teen_single . '</p>';
                }

                if ($teen_return > 0) {
                    echo '<p>Teen return tickets: ' . $teen_return . '</p>';
                }

                if ($child_single > 0) {
                    echo '<p>Child single tickets: ' . $child_single . '</p>';
                }
                
                if ($child_return > 0) {
                    echo '<p>Child return tickets: ' . $child_return . '</p>';
                }

                if ($baby_single > 0) {
                    echo '<p>Baby single tickets: ' . $baby_single . '</p>';
                }

                if ($baby_return > 0) {
                    echo '<p>Baby return tickets: ' . $baby_return . '</p>';
                }
                if ($accessible_seat == 0) {
                    echo '<p>Require accessible seating</p>';
                }
            ?>
            
            <p>Total Price: £<?php echo number_format((float)$total_price, 2, '.', '');;?></p>
        </div>
        <form method="post" action="../index.php">
            <input name='trip_ID 'type=number value=<?php echo $trip_ID;?> readonly>
            <input name='accessible_seat' type=number value=<?php echo $accessible_seat;?> readonly>
            <input name='seats_remaining' type=number value=<?php echo $seats_remaining;?> readonly>
            <input name='total_price' type=number value=<?php echo number_format((float)$total_price, 2, '.', '');;?> readonly>
            <input type=submit value="confirm and pay">
        </form>
    </main>
    <footer>


    </footer>

</body>

</html>