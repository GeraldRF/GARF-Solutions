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
        <a class="navbar-brand" href="#"><img src="images/encabezado/Logo.svg" alt=""></a>

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
                        <a class="dropdown-item" href="#programacion"><img src="images/encabezado/mis-servicios-icons/code-solid.svg"></img> Programación</a>
                        <a class="dropdown-item" href="#configuracion-hosting"><img src="images/encabezado/mis-servicios-icons/hosting-conf.svg"> Configuración de Hosting y más</a>
                        <a class="dropdown-item" href="#instalacion-software"><img src="images/encabezado/mis-servicios-icons/software-install.svg"> Instalación de Software</a>
                        <a class="dropdown-item" href="#mantenimiento-equipos"><img src="images/encabezado/mis-servicios-icons/pc-maintainer.svg"> Mantenimiento de Equipos</a>
                        <a class="dropdown-item" href="#asesoria-tecnologia"><img src="images/encabezado/mis-servicios-icons/tech-asesor.svg"> Asesoria en Tecnologia</a>
                        <a class="dropdown-item" href="#instalacion-camaras"><img src="images/encabezado/mis-servicios-icons/cctv-installer.svg"> Instalación de Camaras</a>
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
        <div class="encabezado-points">
            <div>
                <img src="images/encabezado/pantalla.svg" alt="">
                <h4>Soluciones de TI</h4>
            </div>
            <div><img src="images/encabezado/audifonos.svg" alt="">
                <h4>Excelente atencion al cliente</h4>
            </div>
            <div><img src="images/encabezado/nube.svg" alt="">
                <h4>Ideas inovadoras</h4>
            </div>
            <div><img src="images/encabezado/dinero.svg" alt="">
                <h4>Precios accesibles</h4>
            </div>
        </div>
    </div>

    <!-- MIS SERVICIOS -->
    <div class="mis-servicios-container">

        <div class="element mis-servicios-title">
            <h1>Mis Servicios</h1>
            <img id="arrow-ms" src="images/mis-servicios/arrow.svg" alt="">
        </div>

        <div class="service-card">
            <div style="width: 100%; display: flex; flex-direction: row;">
                <div class="container-T-B element">
                    <h2>Programación</h2>
                </div>
            </div>
            <div class="intro-white element">
                
                    <h4>Siempre busco la adapcion a las necesitades del cliente, encontrando las mejores y
                        más creativas soluciones a los problemas.
                        Para mi no hay mas satisfaccion que ver a un cliente feliz con mi trabajo.
                        <br>
                        Las <strong style="color:#84088E">ideas</strong> y <strong style="color:#008282">creatividad</strong> de los clientes son muy importantes,
                        por eso pongo de mi total esfuerzo para escuchar y comprender lo que desean.
                    </h4>
                    <img style="max-width: 99%;" src="images/mis-servicios/programacion/pc.svg">
                
            </div>
            <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; gap:100px; margin-top:50px;">
                <div>
                    <h3 style="color:#004698">Principales herramientas de desarrollo</h3>
                    <img src="images/mis-servicios/programacion/tools.svg" style="max-width: 90%;">
                </div>
                <div>
                    <h3 style="color:#004698">Capacidades</h3>
                    <ul class="ul-cap" style="font-size: x-large; text-decoration-color: #004698;">
                        <li>Programacion de sitios web</li>
                        <li>Programas de escritorio</li>
                        <li>Modelado de bases de datos</li>
                        <li>Implementacion de bases de datos</li>
                        <li>Desarrollo APIs</li>
                        <li>Enfoque MVC y POO</li>
                        <li>Diseño responsive</li>
                    </ul>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; margin-top: 50px; align-items: center;">
                <h3>¡ IMPULSA TU NEGOCIO CON TU PROPIO SITIO WEB !</h3>
                <a class="btn btn-primary" style="background-color: #004698; min-width: 300px;">¡Contactame ahora!</a>
            </div>
        </div>
        <div class="service-card-blue">
            <div style="width: 100%; display: flex; flex-direction: row; justify-content: flex-end;">
                <div class="container-T-W element">
                    <h2>Configuración de hosting y más</h2>
                </div>
            </div>
        </div>

        <div class="service-card">
            <div class="container-T-B element">
                <h2>Instalación de Software</h2>
            </div>
        </div>

        <div class="service-card-blue">
            <div class="container-T-W element">
                <h2>Mantenimiento de Equipos</h2>
            </div>
        </div>

        <div class="service-card">
            <div class="container-T-B element">
                <h2>Asesoramiento tecnologico</h2>
            </div>
        </div>

        <div class="service-card-blue">
            <div class="container-T-W element">
                <h2>Instalación de camaras</h2>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
</body>

</html>