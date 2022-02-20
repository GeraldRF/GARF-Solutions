<?php include "../../backend/admin/content/get-all.php";

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
                        <h6 class="dato"><?php echo $row["num_telefonico"] ?></h6>
                        <h6 class="dato"><?php echo $row["email"] ?></h6>
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
    echo "<h5>No hay mensajes</h5>";
}

?>





<script>
    $("#todos").toggleClass("nav-link-active");
</script>