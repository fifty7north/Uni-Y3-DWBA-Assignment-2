<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/user-model.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/user.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/sanitising.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/validation.php');

$emailErr = "";
$passwordErr = "";
$password2Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userModel = new UserModel();

    $forename = sanitising\validateInput($_POST["forename"]);
    $surname = sanitising\validateInput($_POST["surname"]);
    $user_email = sanitising\validateInput($_POST["user_email"]);
    $user_password = sanitising\validateInput($_POST["user_password"]);
    $user_confirm_password = sanitising\validateInput($_POST["user_password2"]);

    //check if passwords match
    if (!validation\InputsMatch($user_password, $user_confirm_password)) {
        $password2Err = "* passwords must match";
    }

    //check if password is long enough
    if (!validation\InputIsMinLength($user_password, 8)) {
        $passwordErr = "* password less than 8 characters in length";
    }

    if (!validation\EmailIsAppropriate($user_email)) {
        $emailErr = "* Invalid email format";
    }

    $result = $userModel->getAllUsersUsingEmail($user_email);

    if (count($result) > 0) {
        $emailErr = "* Email already in the database";
    }

    if ($emailErr == "" && $passwordErr == "" && $password2Err == "") {
        $userModel->createNewAccount($forename, $surname, $user_email, $user_password);
        echo '<script> console.log("Variable name =  '.$forename.'"); </script>';
        header("refresh:0; url=/pages/login.php");
    }
}
