<div id="contactame" class="element contactame-title">
    <h1>Contactame</h1>
    <img style="height: 40px;" id="arrow-ms" class="arrow" src="images/mis-servicios/arrow.svg" alt="">
</div>

<div class="main-div-contactame">
    <div class="contactame-container">

        <div>
            <p>Si tienes algun tipo de 
                <strong style="color: blue;">duda</strong>
                o quieres contarme sobre tu
                 <strong style="color: blue;">proyecto</strong> 
                 no dudes en dejarme un mensaje 
                 <strong style="color: green;">sin ningun compromiso</strong>, 
                 encantado te ayudare en los que gustes.</p>
        </div>

        <form method="post" action="">
            <!--../backend/mensaje-interno.php -->

            <div>
                <label for="nombre">Nombre <i style="color: red;">*</i> </label>
                <input id="nombre" name="nombre" type="text" required>
            </div>

            <div>
                <label for="num_telefonico">Numero telefonico</label>
                <input id="num_telefonico" name="num_telefonico" type="text">
            </div>

            <div>
                <label for="email">Correo electronico <i style="color: red;">*</i> </label>
                <input id="email" name="email" type="text" required>
            </div>

            <div>
                <label for="mensaje">Mensaje <i style="color: red;">*</i> </label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>


            <button type="submit" class="btn btn-success">Enviar</button>


        </form>
    </div>

</div>
</div>