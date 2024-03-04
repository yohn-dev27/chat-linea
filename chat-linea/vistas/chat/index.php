<section style="background-color: #eee;">
    <div class="container py-5">

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= $data_request ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Ingrese su nombre">
                            <small id="nombre" class="form-text text-muted">Este espacio es únicamente para el nombre</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellido</label>
                            <input type="text" class="form-control" id="apellido" aria-describedby="apellido" placeholder="Ingrese su apellido">
                            <small id="apellido" class="form-text text-muted">Este espacio es únicamente para el apellido</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Edad</label>
                            <input type="number" class="form-control" id="edad" aria-describedby="edad" placeholder="Ingrese su edad">
                            <small id="edad" class="form-text text-muted">Este espacio es únicamente para la edad</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Usuario</label>
                            <input type="text" class="form-control" id="usuario" aria-describedby="usuario" placeholder="Ingrese su nombre de usuario">
                            <small id="usuario" class="form-text text-muted">Este espacio es únicamente para su nombre de usuario</small>
                        </div>

                        <div class="form-group">
                            <label for="instrumento">Selecciona tu instrumento de preferencia</label>
                            <select class="form-control" id="instrumento">
                                <option>Seleccione...</option>
                                <option>Hola</option>
                                <?foreach($inicioData->ConsultarInstrumentos() as $recorridoDatos):?>
                                <option value=""></option>
                                <?endforeach;?>

                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarDatos">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">

                <div class="card" id="chat1" style="border-radius: 15px;">
                    <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <i class="fas fa-angle-left"></i>
                        <p class="mb-0 fw-bold"><?= $data_header ?></p>
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="card-body">
                        <!--Emisor-->
                        <div class="d-flex flex-row justify-content-start mb-4">
                            <div id="chat-messages"></div>
                        </div>


                        <!--Receptor-->
                        <!-- <div class="d-flex flex-row justify-content-end mb-4">
                            <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                                <p class="small mb-0">Thank you, I really like your product.</p>
                            </div>
                        </div> -->

                        <div class="form-outline">
                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample">Escriba su mensaje</label>
                        </div>
                        <button class="btn btn-primary" id="enviarMensaje" name="enviarMensaje">Enviar</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>