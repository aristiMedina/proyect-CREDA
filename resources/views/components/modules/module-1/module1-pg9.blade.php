<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <h3>
                    <b class="titulosMod1">Actividad</b>
                </h3>
                <p>De acuerdo a lo aprendido, escoja la respuesta correcta.</p>

                {{-- ! Primera pregunta --}}
                <p>
                    <b class="titulosMod1">1. </b>El DUA es:
                </p>
                <div class="form-check mb-5">

                    <div class="d-flex flex-row align-items-center justify-content-between gap-5">
                        <div class="d-flex gap-1">
                            <input id="quest1-resp1" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="quest1-resp1" class="form-check-label">
                                <b class="titulosMod1">a. </b>Diseño Unificado para el
                                Aprendizaje
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest1-resp2" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="quest1-resp2" class="form-check-label">
                                <b class="titulosMod1">b. </b>Directriz Universal de
                                Aprendizaje
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest1-resp3" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="quest1-resp3" class="form-check-label">
                                <b class="titulosMod1">c. </b>Documento Universal de
                                Aprendizaje
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest1-resp4" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="quest1-resp4" class="form-check-label">
                                <b class="titulosMod1">d. </b>Diseño Universal para el
                                Aprendizaje
                            </label>
                        </div>
                    </div>

                </div>

                {{-- ! Segunda pregunta --}}
                <p class="mt-2">
                    <b class="titulosMod1">2. </b>Las tecnologías asistivas pueden:
                </p>

                <div class="form-check mb-5">
                    <div class="d-flex flex-row align-items-center justify-content-between gap-5">

                        <div class="d-flex gap-1">
                            <input id="quest2-resp1" class="form-check-input" type="radio" name="Respuesta2"
                                value="option2" />
                            <label for="quest2-resp1" class="form-check-label">
                                <b class="titulosMod1">a. </b>Ayudar a usuarios en
                                condiciones particulares
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest2-resp2" class="form-check-input" type="radio" name="Respuesta2"
                                value="option2" />
                            <label for="quest2-resp2" class="form-check-label">
                                <b class="titulosMod1">b. </b>Leer la pantalla del navegador
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest2-resp3" class="form-check-input" type="radio" name="Respuesta2"
                                value="option2" />
                            <label for="quest2-resp3" class="form-check-label">
                                <b class="titulosMod1">c. </b>Asistir al navegador en
                                términos de velocidad
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest2-resp4" class="form-check-input" type="radio" name="Respuesta2"
                                value="option2" />
                            <label for="quest2-resp4" class="form-check-label">
                                <b class="titulosMod1">d. </b>Es un concepto que hace
                                referencia a la accesibilidad
                            </label>
                        </div>

                    </div>

                </div>

                {{-- ! Tercera pregunta --}}
                <p class="mt-2">
                    <b class="titulosMod1">3. </b>Los diseños inclusivos permiten:
                </p>
                <div class="form-check mb-4">
                    <div class="d-flex flex-row align-items-center justify-content-between gap-5">

                        <div class="d-flex gap-1">
                            <input id="quest3-resp1" class="form-check-input" type="radio" name="Respuesta3" value="option3" />
                            <label for="quest3-resp1" class="form-check-label">
                                <b class="titulosMod1">a. </b>Aumentar el alcance, de tal
                                modo que los recursos sean usados por la mayor cantidad de
                                personas
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest3-resp2" class="form-check-input" type="radio" name="Respuesta3" value="option3" />
                            <label for="quest3-resp2" class="form-check-label">
                                <b class="titulosMod1">b. </b>Generar conciencia sobre la
                                importancia del desarrollo
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest3-resp3" class="form-check-input" type="radio" name="Respuesta3" value="option3" />
                            <label for="quest3-resp3" class="form-check-label">
                                <b class="titulosMod1">c. </b>Conceder un trato justo para
                                todas las personas
                            </label>
                        </div>

                        <div class="d-flex gap-1">
                            <input id="quest3-resp4" class="form-check-input" type="radio" name="Respuesta3" value="option3" />
                            <label for="quest3-resp4" class="form-check-label">
                                <b class="titulosMod1">d. </b>Generar impacto sobre la
                                importancia de usar validadores de pantalla
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="threeButtons gap-3">

                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0" href="{{ route('module-1', ['page'=>8]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0" href="{{ route('module-1', ['page'=>10]) }}">Siguiente</a></button>

                <div>
                    <button class="buttonModEnviar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Enviar
                    </button>

                    <x-modal>
                        <x-slot name="image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgb(241, 52, 52);transform: ;msFilter:;"><path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z"></path><path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path></svg>
                        </x-slot>

                        <x-slot name="description">
                            Ha reprobado el módulo 1. Intentelo de nuevo
                        </x-slot>
                    </x-modal>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
