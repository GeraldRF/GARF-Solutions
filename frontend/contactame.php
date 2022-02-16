<div id="contactame" class="element contactame-title">
    <h1>Contactame</h1>
    <img style="height: 40px;" id="arrow-ms" class="arrow" src="images/mis-servicios/arrow.svg" alt="">
</div>

<div class="main-div-contactame">
    <div class="contactame-container">

        <form method="post" action="">
            <!--../backend/mensaje-interno.php -->

            <div>
                <label for="nombre">Nombre <i style="color: red;">*</i> </label>
                <input name="nombre" type="text" required>
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

            <div>
                <h4 style="color: #004698; text-align: center;">Enviar por:</h4>
            </div>

            <div>
                <div class="medio-contacto">
                    <a class="conbutton" id="whapp"><img src="/images/contactame/whapp.svg" alt="whatsapp" title="Whatsapp"></a>
                    <a class="conbutton" id="correo"><img src="/images/contactame/correo.svg" alt="Correo electrónico" title="Correo electrónico"></a>
                    <button id="interno" type="submit" class="conbutton" title="Mensaje interno"><img src="/images/contactame/inbox.svg" alt="Mensaje interno"></button>
                    <p style="transform: rotate(-40deg) translateY(-70px) translateX(55px); color:white; background-color: red; padding:2px; text-align: center;">Temporalmente inactivo</p>
                </div>

            </div>

        </form>
    </div>

</div>
</div>