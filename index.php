<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | GARF-Solutions</title>

    <link rel="stylesheet" href="css/bootstrap-4.6.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <script src="js/popper-base.min.js.map_2.4.4/cdnjs/popper-base.min.js.map"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap-4.6.1-dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!-- https://brandominus.com/blog/creatividad/todas-etiquetas-html5/ -->
    <div class="background-img"></div>

    <?php

    include('frontend/nav-bar.php');

    include('frontend/encabezado.php');

    include('frontend/mis-servicios.php');

    include('frontend/contactame.php');

    include('frontend/footer.php');


    if (isset($_SESSION["mensaje_status"])) {

        if ($_SESSION["mensaje_status"] == 'correcto') {
            include("frontend/success.php");
            $_SESSION["mensaje_status"] = "";
        } else if ($_SESSION["mensaje_status"] == 'error') {
            include("frontend/error.php");
            $_SESSION["mensaje_status"] = "";
        }
    }
    ?>

    <?php
    include('frontend/cookies.php');
    ?>

    <script src="../js/app.js"></script>
</body>



</html>