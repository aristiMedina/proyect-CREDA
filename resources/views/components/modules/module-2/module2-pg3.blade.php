<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <img class="diseñoTablaIMG" src="{{ asset('imagenes_mod2/Tabla.png') }}"
                    alt="tabla ejemplos de que usar y que no" />

                <h4 class="titulos">3.1 Tema y diseño de las diapositivas</h4>
                <ul>
                    <li>
                        No recargar el contenido de la diapositiva, se propone incluir
                        puntos o mensajes claves dentro de la presentación
                    </li>
                    <li>
                        El tamaño de la letra es muy importante para que todo el contenido
                        de la diapositiva se pueda ver con claridad por eso se recomienda
                        un tamaño de letra de 28 a 32 puntos e ir ajustando según se
                        requiera
                    </li>
                    <li>
                        Se recomienda alinear a la izquierda ya que los lectores de
                        pantalla encuentran rápidamente el renglón siguiente. Esta
                        alineación también es una directriz del formato de lectura
                        fácil(1) ya que la justificación del texto puede generar
                        separaciones artificiales de los caracteres y dificultar esta
                        actividad(2).
                    </li>
                    <li>
                        Es necesario emplear un lenguaje concreto, claro y preciso para
                        que las personas con discapacidad cognitiva puedan entender la
                        información
                    </li>
                </ul>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
