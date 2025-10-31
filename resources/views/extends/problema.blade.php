<fieldset id="seccion2" class="mb-3">
    <div class="accordion-item border-secondary">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo">
                PROBLEMAS ENCONTRADOS
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <div class="row">
                    <div class="col">
                        <h3>Estado Inicial</h3>
                        <div class="col">
                            <div class="mb-3">
                                <div class="row align-items-center mb-3">
                                    <div class="col-6 col-md-6">
                                        <label class="form-label fw-bold mb-0" style="margin-right: 10px">IMEI:</label>
                                        {{-- <img src="{{ asset('imgs/tresdt/qr2.jpg') }}" alt="QR" class="qr"> --}}
                                        {{-- Contenedor QR IMEI-I --}}
                                        <div id="readerImei-i" width="600px" hidden></div>
                                        {{--   --}}
                                    </div>
                                    <div class="col-6 col-md-6 w-75">
                                        <input type="text" id="i-imei" name="i-imei"
                                            class="form-control border-secondary">
                                    </div>
                                </div>

                                <div class="row align-items-center mb-3">
                                    <div class="col-6 col-md-6">
                                        <label class="form-label fw-bold mb-0" style="margin-right: 10px">ICC:</label>
                                        {{-- <img src="{{ asset('imgs/tresdt/qr2.jpg') }}" alt="QR" class="qr"> --}}
                                    </div>
                                    <div class="col-6 col-md-6 w-75">
                                        <input type="text" id="i-cc" name="i-icc"
                                            class="form-control border-secondary">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3" style="display: flex">
                                <label class="form-label d-block fw-bold" style="margin-right: 10px">Voltaje:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input border-secondary" type="radio" name="voltaje"
                                        id="voltaje12" value="12V">
                                    <label class="form-check-label" for="voltaje12">12V</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input border-secondary" type="radio" name="voltaje"
                                        id="voltaje24" value="24V">
                                    <label class="form-check-label" for="voltaje24">24V</label>
                                </div>
                            </div>
                            <div class="seccion mt-4">
                                <div><label class="form-label d-block fw-bold" style="margin-right: 10px">Problemas:
                                    </label>
                                    <label>Ingresa ( , ) o presiona enter para ingresar el problema</label>
                                </div><br>
                                <div class="form-floating mb-3 cajon">
                                    <div id="problemasContainer"
                                        class="form-control d-flex flex-wrap align-items-center">
                                        <textarea type="text" id="inputProblema" class="flex-grow-1 inputCajon" autofocus="false" maxlength="50"></textarea>
                                        <input type="text" id="problemaoculto" hidden>
                                    </div>
                                    <label for="inputProblema" id="labelCajon">Lista de problemas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h3>Estado Vehículo</h3>
                        <div class="row">
                            {{-- @foreach ($EstadoVehiculo as $sistema)
                                <div class="mb-3" style="display: flex">
                                    <label class="form-label d-block fw-bold w-50"
                                        style="margin-right: 10px">{{ $sistema }}:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-secondary" type="radio"
                                            name="{{ $sistema }}" id="accesorioB" value="B">
                                        <label class="form-check-label" for="accesorioB">B</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-secondary" type="radio"
                                            name="{{ $sistema }}" id="accesorioM" value="M">
                                        <label class="form-check-label" for="accesorioM">M</label>
                                    </div>
                                </div>
                            @endforeach --}}

                            <div class="seccion mt-4">
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary add-input" id="btnObservacion"
                                        data-bs-toggle="modal" data-bs-target="#myModalCamara">
                                        <div class="d-flex align-items-center text-align-center">
                                            <box-icon type='solid'name='camera' size="22px" color="white"
                                                class="icon" id="icon"></box-icon>
                                            Observaciones
                                        </div>
                                    </button>
                                    <div id="observacion-container" class="inputs-container mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</fieldset>