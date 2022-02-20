<?php

include "../../backend/dbcon.php";

$query = "SELECT * FROM `mensajes`;";

$result = $conn->query($query);

if ($result->num_rows > 0) {

    $mensajes = $result;

} 
