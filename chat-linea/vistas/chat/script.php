<script>
    $(document).ready(function() {
        //El boton para iniciar el chat se oculta hasta que no se guarden los datos del usuario
        $("#enviarMensaje").hide();
        $('#exampleModalLong').modal('show');
        //Valida que el usuario almacene los datos
        $("#guardarDatos").click(function() {
            $("#enviarMensaje").show();
            $('#exampleModalLong').modal('hide');
        });
        //Valida cada vez que se envia un mensaje 
        $("#enviarMensaje").click(function() {
            var message = $("#message").val();
            var user = $("#usuario").val();

            if (message != "") {
                $.post("index.php?c=chat&a=enviarMensaje", {
                    message: message,
                    user: user
                }, function() {
                    $("#message").val("");
                    loadMessages();
                });
            } else {
                alert("Debe ingresar un mensaje antes de enviar");
            }
        });

        function loadMessages() {
            $.get("index.php?c=chat&a=consultar", function(data) {
                data = JSON.stringify(data)
                data = JSON.parse(data)

                $("#chat-messages").html(data);
            });
        }
        //Carga una vez que se inicializa la web y toma un lapso de 3 segundos en refrescar
        loadMessages();
        setInterval(loadMessages, 3000);
    });
</script>