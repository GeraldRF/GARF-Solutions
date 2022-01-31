<div id="div-cookies" style="display: none;">
    <div>
        <h4 class="font-b">Tu privacidad importa</h4>
        <div>

            <h6>Este sitio web utiliza cookies para mejorar su experiencia la proxima vez que lo visites, si permanece en este sitio acepta las cookies.
            </h6>
            <!--
        <a hreflang="es" href="/info/aviso-legal">Aviso Legal</a> y la
    <a hreflang="es" href="/info/politica-de-privacidad">Política de Privacidad</a>. -->

        </div>
        <button type="button" class="btn btn-sm btn-primary btn-b" onclick="acceptCookies()">
            Acepto el uso de cookies
        </button>
    </div>
    <img class="happy-man" src="../images/coockies/happy-man.svg" alt="">
</div>
<style>
    .font-b {
        color: #004698;
        text-align: center;
    }

    .btn-b {
        background-color: #004698;
        margin-bottom: 30px;
    }

    .happy-man {
        max-width: 100px;
    }

    #div-cookies {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        position: fixed;
        bottom: 0px;
        left: 0px;
        width: 100%;
        background-color: whitesmoke;
        box-shadow: 0px -5px 15px gray;
        padding: 7px;
        z-index: 99;
    }

    #div-cookies>div {
        text-align: center;
        display: flex;
        flex-direction: column;
    }
</style>
<script>
    function checkAcceptCookies() {
        if (localStorage.acceptCookies == 'true') {} else {
            $('#div-cookies').show();
        }
    }

    function acceptCookies() {
        localStorage.acceptCookies = 'true';
        $('#div-cookies').hide();
    }
    $(document).ready(function() {
        checkAcceptCookies();
    });
</script>