<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod3">
        <div class="col-sm modulo3 m1 d-flex">
            <div class="col-9 align-self-center">
                <p>Recomendaciones Generales:</p>
                <ul>
                    <li>Definir un idioma para el documento.</li>
                    <li>
                        Proporcione un texto alternativo para las imágenes y los gráficos.
                    </li>
                    <li>El contenido debe ser lo más claro posible.</li>
                    <li>
                        Utilice encabezados y estilos adecuados (teniendo en cuenta una
                        buena relación entre los colores y el tamaño de la fuente del
                        texto).
                    </li>
                    <li>Organice su contenido de manera lógica y ordenada.</li>
                    <li>
                        Use adecuadamente las funcionalidades para la creación de
                        elementos como tablas, listas, saltos de página, títulos y
                        numeración. Evite el uso del tabulador y el espaciado.
                    </li>
                    <li>
                        El tamaño de la letra debe estar entre 12 y 18 en la mayoría de
                        los casos.
                    </li>
                    <li>
                        Evite el uso excesivo de negrilla, cursiva y colores en el texto.
                    </li>
                    <li>Se recomienda hacer uso de Arial y Verdana como fuente.</li>
                    <li>
                        Se sugiere que analice el contraste del texto y el fondo del
                        documento, con herramientas especializadas que se pueden encontrar
                        en la web.
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
