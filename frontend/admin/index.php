<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | GARF Solutions</title>
    <link rel="stylesheet" href="../../css/admin/app.css">
    <link rel="shortcut icon" href="../../favicon.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
</head>

<body>

    <?php

    if (isset($_SESSION["auth"])) {
        if ($_SESSION["auth"]) {
            include "content.php";
        } else {
            include "login.php";
        }
    } else {
        include "login.php";
    }

    ?>

</body>

</html>