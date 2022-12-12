<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/staff-model.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/staff.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/sanitising.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/validation.php');

$emailErr = "";
$passwordErr = "";
$password2Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $staffModel = new StaffModel();

    $staff_email = sanitising\validateInput($_POST["staff_email"]);
    $staff_password = sanitising\validateInput($_POST["staff_password"]);
    $staff_confirm_password = sanitising\validateInput($_POST["staff_password2"]);

    //check if passwords match
    if (!validation\InputsMatch($staff_password, $staff_confirm_password)) {
        $password2Err = "* passwords must match";
    }

    //check if password is long enough
    if (!validation\InputIsMinLength($staff_password, 8)) {
        $passwordErr = "* password less than 8 characters in length";
    }

    if (!validation\EmailIsAppropriate($staff_email)) {
        $emailErr = "* Invalid email format";
    }

    $result = $staffModel->getAllUsersUsingEmail($staff_email);

    if (count($result) > 0) {
        $emailErr = "* Email already in the database";
    }

    if ($emailErr == "" && $passwordErr == "" && $password2Err == "") {
        $staffModel->createNewAccount($staff_email, $staff_password);
        header("refresh:0; url=/pages/staff-login.php");
    }
}
