<div class="modal fade show" id="mensaje_enviado" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: block;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center;" class="modal-body">
                <img style="width: 200px;" src="/images/mensajes/correcto.svg" alt="">
                <p style="color: green;">Enviado correctamente</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Entendido!</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#mensaje_enviado').modal('show')
</script>