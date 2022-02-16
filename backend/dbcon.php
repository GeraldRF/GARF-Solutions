<?php

$servername = "localhost";//sql306.epizy.com
$username = "root";//epiz_30918587
$password ="";//arVYMKQ2BGGa8ft
//DB = epiz_30918587_garf_solutions_db

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>