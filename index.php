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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  
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