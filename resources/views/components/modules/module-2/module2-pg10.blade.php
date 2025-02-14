<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <h3 class="titulos">Actividad</h3>
                <p>De acuerdo a lo aprendido, realice los siguientes actividades</p>

                <p>
                    <b class="titulos">1. </b>Escoja los elementos que hay que tener
                    en cuenta al hacer una presentación
                </p>

                {{-- ! Primera pregunta --}}
                <div class="form-check mb-5 d-flex justify-content-center">
                    <div class="w-50 d-flex flex-column align-items-start justify-content-between gap-2">
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res1" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res1" class="form-check-label">
                                <b class="titulos">a. </b>Animaciones,Tablas,Computador
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res2" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res2" class="form-check-label">
                                <b class="titulos">b. </b>Textos,Animaciones,Celular
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res3" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res3" class="form-check-label">
                                <b class="titulos">c. </b>Imágenes,Textos,Tablas
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res4" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res4" class="form-check-label">
                                <b class="titulos">d. </b>Tablas,Textos,Animaciones
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res5" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res5" class="form-check-label">
                                <b class="titulos">e. </b>Computador,Celular,Tablas
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res6" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res6" class="form-check-label">
                                <b class="titulos">f. </b>Imágenes,Celular,Computador
                            </label>
                        </div>
                    </div>
                </div>

                {{-- ! Segunda pregunta --}}
                <p class="">
                    <b class="titulos">2. </b>Cual es/son las tipografias mas
                    recomendables para hacer presentaciones
                </p>
                <div class="form-check mb-5 d-flex justify-content-center">
                    <div class="w-50 d-flex flex-column align-items-start justify-content-between gap-2">
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res1" class="form-check-input" type="radio" name="Respuesta2" value="option2" />
                            <label for="pregunta2_res1" class="form-check-label">
                                <b class="titulos">a. </b>Curlz MT,Calibri
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res2" class="form-check-input" type="radio" name="Respuesta2" value="option2" />
                            <label for="pregunta2_res2" class="form-check-label">
                                <b class="titulos">b. </b>Calibri,Tahoma
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res3" class="form-check-input" type="radio" name="Respuesta2" value="option2" />
                            <label for="pregunta2_res3" class="form-check-label">
                                <b class="titulos">c. </b>Ravie,Curlz MT
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res4" class="form-check-input" type="radio" name="Respuesta2" value="option2" />
                            <label for="pregunta2_res4" class="form-check-label">
                                <b class="titulos">d. </b>Tahoma,Chiller
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res5" class="form-check-input" type="radio" name="Respuesta2" value="option2" />
                            <label for="pregunta2_res5" class="form-check-label">
                                <b class="titulos">e. </b>Chiller,Calibri
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="threeButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSalir">Salir</button>

                <button class="buttonModEnviar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Enviar
                </button>
            </div>
            <x-modal>
                <x-slot name="image">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgb(30, 172, 37);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path></svg>
                </x-slot>

                <x-slot name="description">
                    Ha aprobado el módulo 2
                </x-slot>
            </x-modal>
        </div>
    </div>

</x-app-layout>
