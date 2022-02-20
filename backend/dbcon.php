<?php

//$servername = "sql306.epizy.com";
$servername = "localhost";
//$username = "epiz_30918587";
$username = "root";
//$password = "arVYMKQ2BGGa8ft";
$password = "Root2907";
//$db = "epiz_30918587_garf_solutions_db";
$db = "garf_solutions";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  $_SESSION["mensaje_status"] = 'error';
  $_SESSION["error_status"] = '' . $conn->connect_error;
  die("Connection failed: " . $conn->connect_error);
}
