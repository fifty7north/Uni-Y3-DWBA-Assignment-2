<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/staff-model.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/models/staff.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/sanitising.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/validation.php');

$emailErr = "";
$passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $staffModel = new StaffModel();

    $username = sanitising\validateInput($_POST["username"]);
    $password = sanitising\validateInput($_POST["password"]);

    //check if password is long enough
    if (!validation\InputIsMinLength($password, 8)) {
        $passwordErr = "* password less than 8 characters in length";
    }

    if (!validation\EmailIsAppropriate($username)) {
        $emailErr = "* Invalid email format";
    }

    //check if details in the database
    $result = $staffModel->getFirstUserUsingEmail($username);

    //if query was not successful
    if ($result == false) {
        echo "query not successful";
        return;
    }

    //If no match with email address
    if ($result->num_rows == 0) {
        $emailErr = "* No Account With this Email found";
        return;
    }

    $account = $result->fetch_assoc();

    if (password_verify($password, $account["password"])) {
        echo "Correct Password";
        header("refresh:0; url=/pages/staff-report.php");
    } else {
        $passwordErr = "* Incorrect Password";
        return;
    }
}
