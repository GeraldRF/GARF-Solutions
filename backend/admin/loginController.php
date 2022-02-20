<?php
if (
    isset($_POST["username"]) and
    isset($_POST["password"])
) {

    include "../dbcon.php";

    $user = $_POST["username"];

    $query = "SELECT password FROM `users` where username='$user'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {

        session_start();

        $password = $result->fetch_assoc();
        $input = $_POST["password"]."";


        if (password_verify($input, $password["password"])) {
            $_SESSION["login_error"] = false;
            $_SESSION["auth"] = true;
        } else {
            $_SESSION["login_error"] = true;
        }
    } else {
        $_SESSION["login_error"] = true;
    }
}

header("Location: http://garf-solutions.test/admin");
