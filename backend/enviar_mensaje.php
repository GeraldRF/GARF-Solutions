<?php
session_start();

if (
  isset($_POST['nombre'])
  and isset($_POST['num_telefonico'])
  and isset($_POST['email'])
  and isset($_POST['mensaje'])
) {

  include('dbcon.php');

  $nombre = filter_var($_POST['nombre']);
  $num = filter_var($_POST['num_telefonico']);
  $correo = filter_var($_POST['email']);
  $mensaje = filter_var($_POST['mensaje']);

  $query = "INSERT INTO mensajes(nombre, num_telefonico, email, mensaje, grado, leido) VALUES('$nombre', '$num' , '$correo', '$mensaje' , 0, false)";

  $conn->query($query);

  if ($conn->error) {
    $_SESSION["mensaje_status"] = 'error';
    $_SESSION["error_status"] = '' . $conn->error;
  } else {
    $_SESSION["mensaje_status"] = 'correcto';
  }
  //header("Location:" . "https://garf-solutions.ga");
  header("Location:" . "http://garf-solutions.test");
} else {
  //header("Location:" . "https://garf-solutions.ga#contactame");
  header("Location:" . "http://garf-solutions.test#contactame");
}
