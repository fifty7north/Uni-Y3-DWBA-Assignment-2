<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

class UserModel
{

    public function getAllUsersUsingEmail($user_email)
    {
        $conn = connect();

        //check if email in DB
        $stmt = $conn->prepare("SELECT * FROM customer_login WHERE user_email = ?");
        $stmt->bind_param("s", $user_email);
        $stmt->execute();
        $result = $stmt->get_result();

        $AllUsers = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nextUser = new User(
                    $row["user_email"],
                    $row["user_password"]
                );
                array_push($AllUsers, $nextUser);
            }
        }

        $conn->close();
        return $AllUsers;
    }

    public function getFirstUserUsingEmail($user_email)
    {
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM customer_login WHERE user_email = ? LIMIT 1");
        $stmt->bind_param("s", $user_email);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result

        $conn->close();
        return $result;
    }

    public function createNewAccount($forename, $surname, $user_email, $user_password)
    {
        $conn = connect();
        //hashes password and inserts into database
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO customer_login (forename, surname, user_email, user_password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $forename, $surname, $user_email, $hash_password);
        $stmt->execute();

        $conn->close();
    }
}
