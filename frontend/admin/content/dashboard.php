<?php include "../../backend/admin/content/get-dashboard.php"; ?>

<h2 style="margin-top:20px;">Cantidad de mensajes</h2>
<div class="dashboard-card">

    <div class="item-card color-purple">
        <h5>Total de mensajes: </h5>
        <p><?php echo $dashboard["todos"]; ?></p>
    </div>
    <div class="item-card color-orange">
        <h5>Mensajes sin leer: </h5>
        <p><?php echo $dashboard["sin_leer"]; ?></p>
    </div>
    <div class="item-card color-green">
        <h5>Mensajes leidos: </h5>
        <p><?php echo $dashboard["leidos"]; ?></p>
    </div>

</div>


<script>
    $("#dashboard").toggleClass("nav-link-active");
</script>