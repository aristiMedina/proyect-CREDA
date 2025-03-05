<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod3">
        <div class="col-sm modulo3 m1">
            <div>
                <h3 class="titulosMod3 titulosCentros">Actividades</h3>

                {{-- ! Primera pregunta --}}
                <p>
                    <b class="titulosMod3">1. </b>¿Por qué es importante que los
                    documentos sean accesibles?
                </p>

                <div class="form-check mb-4 d-flex justify-content-center">
                    <div class="w-70 d-flex flex-column align-items-start justify-content-between gap-3">
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res1" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res1" class="form-check-label">
                                <b class="titulosMod3">a. </b>Por que es importante que
                                todas las personas del mundo puedan entender la información que
                                se proporciona en los documentos.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res2" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res2" class="form-check-label">
                                <b class="titulosMod3">b. </b>Porque de esta forma más
                                personas pueden tener acceso a la información que se presenta en
                                los documentos.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res3" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res3" class="form-check-label">
                                <b class="titulosMod3">c. </b>Por qué existe la posibilidad
                                de que personas en condiciones particulares no puedan acceder de
                                manera tradicional al contenido de los documentos digitales,
                                dada alguna condición de discapacidad ya sea parcial o total.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta1_res4" class="form-check-input" type="radio" name="Respuesta1"
                                value="option1" />
                            <label for="pregunta1_res4" class="form-check-label">
                                <b class="titulosMod3">d. </b>Por que el autor del documento
                                quiere que su texto sea leído por todas las personas sin
                                distinción de su condición
                            </label>
                        </div>
                    </div>
                </div>

                {{-- ! Segunda pregunta --}}
                <p class="">
                    <b class="titulosMod3">2. </b>Seleccione 3 recomendaciones que
                    usted considere son las más importante al momento de crear un
                    documento accesible (no hay respuesta incorrecta, cualquier
                    respuesta es válida (solo 3 opciones se permiten))
                </p>
                <div class="form-check mb-5 d-flex justify-content-center">
                    <div class="w-50 d-flex flex-column align-items-start justify-content-between gap-3">
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res1" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res1" class="form-check-label">
                                <b class="titulosMod3">a. </b>Definir un idioma para el
                                documento.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res2" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res2" class="form-check-label">
                                <b class="titulosMod3">b. </b>Proporcione un texto
                                alternativo para las imágenes y los gráficos.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res3" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res3" class="form-check-label">
                                <b class="titulosMod3">c. </b>El contenido debe ser lo más
                                claro posible.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res4" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res4" class="form-check-label">
                                <b class="titulosMod3">d. </b>Utilice encabezados y estilos
                                adecuados (teniendo en cuenta una buena relación entre los
                                colores y el tamaño de la fuente del texto).
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res5" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res5" class="form-check-label">
                                <b class="titulosMod3">e. </b>Organice su contenido de
                                manera lógica y ordenada.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res6" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res6" class="form-check-label">
                                <b class="titulosMod3">f. </b>Use adecuadamente las
                                funcionalidades para la creación de elementos como tablas,
                                listas, saltos de página, títulos y numeración. Evite el uso del
                                tabulador y el espaciado.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res7" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res7" class="form-check-label">
                                <b class="titulosMod3">g. </b>El tamaño de la letra debe
                                estar entre 12 y 18 en la mayoría de los casos.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res8" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res8" class="form-check-label">
                                <b class="titulosMod3">h. </b>Evite el uso excesivo de
                                negrilla, cursiva y colores en el texto.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res9" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res9" class="form-check-label">
                                <b class="titulosMod3">i. </b>Se recomienda hacer uso de
                                Arial y Verdana como fuente.
                            </label>
                        </div>
                        <div class="d-flex gap-1">
                            <input id="pregunta2_res10" class="form-check-input" type="checkbox" />
                            <label for="pregunta2_res10" class="form-check-label">
                                <b class="titulosMod3">j. </b>Se sugiere que analice el
                                contraste del texto y el fondo del documento, con herramientas
                                especializadas que se pueden encontrar en la web.
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="threeButtons">

                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-3', ['page'=>4]) }}">Anterior</a></button>

                {{-- <button class="buttonModSalir">Salir</button> --}}
                <button class="buttonModSalir"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('get-init') }}">Salir</a></button>
                <div>
                    <button class="buttonModEnviar">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
