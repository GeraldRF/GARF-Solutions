<?php include "../../backend/admin/content/get-unreaded.php";

if (isset($mensajes)) {

?>

    <div class="mensajes-container">

        <?php
        while ($row = $mensajes->fetch_assoc()) {
        ?>
            <div class="mensaje-card">
                <div>
                    <p class="nombre">Mensaje de <?php echo $row["nombre"] ?></p>
                </div>
                <div class="datos_mensaje">
                    <div class="datos">
                        <h2 class="titleof">Contacto:</h2>
                        <a href="https://wa.me/<?php echo  $row["num_telefonico"] ?>" class="dato"><?php echo $row["num_telefonico"] ?></a>
                        <a href="<?php echo "<script>mailto(".$row["email"].")</script>" ?>" class="dato"><?php echo $row["email"] ?></a>
                    </div>
                    <div>
                        <div class="mensaje">
                            <?php
                            echo $row["mensaje"];
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        <?php
        }
        ?>
    </div>




<?php
} else {
    echo "<h5 style='margin-top:20px;'>No hay mensajes sin leer</h5>";
}

?>

<script>
    $("#sinleer").addClass("nav-link-active");
</script>