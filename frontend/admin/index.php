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
    <link rel="stylesheet" href="../../css/bootstrap-4.6.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/admin/app.css">
    <link rel="shortcut icon" href="../../favicon.svg" type="image/x-icon">
    <script src="../../js/popper-base.min.js.map_2.4.4/cdnjs/popper-base.min.js.map"></script>
    <script src="../../js/jquery-3.6.0.js"></script>
    <script src="../../js/bootstrap-4.6.1-dist/js/bootstrap.bundle.min.js"></script>

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