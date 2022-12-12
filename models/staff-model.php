<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/private/connection.php');

class StaffModel
{

    public function getAllUsersUsingEmail($staff_email)
    {
        $conn = connect();

        //check if email in DB
        $stmt = $conn->prepare("SELECT * FROM staff_login WHERE username = ?");
        $stmt->bind_param("s", $staff_email);
        $stmt->execute();
        $result = $stmt->get_result();

        $AllUsers = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nextUser = new Staff(
                    $row["staff_email"],
                    $row["staff_password"]
                );
                array_push($AllUsers, $nextUser);
            }
        }

        $conn->close();
        return $AllUsers;
    }

    public function getFirstUserUsingEmail($staff_email)
    {
        $conn = connect();

        $stmt = $conn->prepare("SELECT * FROM staff_login WHERE username = ? LIMIT 1");
        $stmt->bind_param("s", $staff_email);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result

        $conn->close();
        return $result;
    }

    public function createNewAccount($staff_email, $staff_password)
    {
        $conn = connect();
        //hashes password and inserts into database
        $hash_password = password_hash($staff_password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO staff_login (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $staff_email, $hash_password);
        $stmt->execute();

        $conn->close();
    }
}
