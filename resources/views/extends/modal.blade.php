<!-- The Modal -->
<div class="modal" id="myModalCamara">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">LISTA DE OBSERVACIONES</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 10px">
                <div class="row" style="padding: 15px">
                    <div class="col-lg-2 col-md-2 col-12 divCam" id="btnLeft">
                        <button class="btn-camara" id="btnCamaraModalLef">
                            <div class="d-flex align-items-center justify-content-center">
                                <box-icon name='chevron-left' size="lg" class="icon"></box-icon>
                                Anterior
                            </div>
                        </button>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="card-body">
                            <div id="vista-previa" class="mb-3">
                                <img id="imagenActual" src="{{ asset('imgs/tresdt/img.png') }}" alt="Sin imagen"
                                    style="width: 300px;">
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control border-secondary" id="observacionFoto"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Observación</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 divCam" id="btnRight">
                        <button type="button" class="btn-camara" id="btnCamaraModalRight">
                            <div class="d-flex align-items-center justify-content-center">
                                Siguiente
                                <box-icon name='chevron-right' size="lg" class="icon"></box-icon>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="file" name="foto" id="almacenamiento" hidden>
                <button type="button" class="btn btn-outline-dark btn-modal" id="nuevaObservacion">
                    <span class="text">Nuevo</span>
                </button>
                <button type="button" class="btn btn-outline-danger" id="cancelarfotoComentario">
                    <span class="text">Cancelar</span>
                </button>
                <button type="button" class="btn btn-outline-success" id="btnGuardarFotoComentario">
                    <span class="text">Guardar</span>
                </button>
                <button type="button" class="btn btn-outline-success" id="btnactualizarFotoComentario">
                    <span class="text">Actualizar</span>
                </button>
                <button type="button" class="btn btn-outline-danger" id="eliminarfotoComentario">
                    <span class="text">Eliminar</span>
                </button>
                <button type="button" class="btn btn-outline-secondary" id="cerrarModalfoto"
                    data-bs-dismiss="modal">
                   <span class="text">Cerrar</span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>