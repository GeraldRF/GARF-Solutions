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

</head>

<body>


    <nav class="navbar navbar-expand-sm nav-bar">
        <a class="navbar-brand" href="#"><img src="../images/encabezado/Logo.svg" alt=""></a>

        <div class="hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation" style="border: none; align-items: self-end;">
            <div class="hamburger-inner-0"></div>
            <div class="hamburger-inner-1"></div>
            <div class="hamburger-inner-2"></div>
        </div>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link-size" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mis servicios</a>
                    <div class="dropdown-menu dropdown-backgroud">
                        <a class="dropdown-item" href="#programacion">Programación</a>
                        <a class="dropdown-item" href="#configuracion-hosting">Configuración de Hosting y más</a>
                        <a class="dropdown-item" href="#instalacion-software">Instalación de Software</a>
                        <a class="dropdown-item" href="#mantenimiento-equipos">Mantenimiento de Equipos</a>
                        <a class="dropdown-item" href="#asesoria-tecnologia">Asesoria en Tecnologia</a>
                        <a class="dropdown-item" href="#instalacion-camaras">Instalación de Camaras</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#contactame" class="nav-link nav-link-size">Contactame</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="encabezado">
        <h1>¡ Las mejores soluciones tecnologicas !</h1>
        <div>
            <img src="../images/encabezado/pantalla.svg" alt="">
            <h4>Soluciones de TI</h4>
        </div>
        <div><img src="../images/encabezado/audifonos.svg" alt="">
            <h4>Excelente atencion al cliente</h4>
        </div>
        <div><img src="../images/encabezado/nube.svg" alt="">
            <h4>Ideas inovadoras</h4>
        </div>
        <div><img src="../images/encabezado/dinero.svg" alt="">
            <h4>Precios accesibles</h4>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        $('.hamburger').on('click', function() {
            $('.hamburger').toggleClass('open');
        });
    </script>
</body>

</html>