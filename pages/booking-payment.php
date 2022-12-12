<?php
$adult_single = $_POST["adult-single"];
$adult_return = $_POST["adult-return"];
$teen_single = $_POST["teen-single"];
$teen_return = $_POST["teen-return"];
$child_single = $_POST["child-single"];
$child_return = $_POST["child-return"];
$baby_single = $_POST["baby-single"];
$baby_return = $_POST["baby-return"];
$trip_ID = $_POST['trip_ID'];

echo "adult-single: ", $adult_single, "<br>";
echo "adult-return: ", $adult_return, "<br>";
echo "teen-single: ", $teen_single, "<br>";
echo "teen-return: ", $teen_return, "<br>";
echo "child-single: ", $child_single, "<br>";
echo "child-return: ", $child_return, "<br>";
echo "baby-single: ", $baby_single, "<br>";
echo "baby-return: ", $baby_return, "<br>";
echo "trip ID: ", $trip_ID;
?>