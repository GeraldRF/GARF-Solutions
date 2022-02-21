<?php

include "../../backend/dbcon.php";

$query = "SELECT * FROM `mensajes` WHERE leido=0;";

$result = $conn->query($query);

if ($result->num_rows > 0) {

    $mensajes = $result;

} 