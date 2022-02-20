<?php

include "../../backend/dbcon.php";

$query = "SELECT * FROM `mensajes`;";

$result = $conn->query($query);


if ($result->num_rows > 0) {
    $todos = 0;
    $leidos = 0;
    $sin_leer = 0;
    while ($row = $result->fetch_assoc()) {
        $todos++;
        $row["leido"] == 0 ? $sin_leer++:$leidos++;
        $dashboard = ["todos" => $todos, "leidos" => $leidos, "sin_leer" => $sin_leer];
    }
} else {
    $dashboard = ["todos" => 0, "leidos" => 0, "sin_leer" => 0];
}