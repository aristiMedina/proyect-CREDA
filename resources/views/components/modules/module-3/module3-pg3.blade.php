<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod3">
        <div class="col-sm modulo3 m1">
            <div>
                <h4 class="titulosMod3">Herramientas Recomendadas</h4>
                <p>
                    <b class="titulosMod3">AccessODF: </b>Es una extensión que se
                    diseñó para LibreOffice, la alternativa que se ofrecen en sistemas
                    operativos de la familia Linux para el paquete de herramientas
                    ofimáticas. Con el uso de esta extensión, es posible evaluar y
                    reparar los problemas de accesibilidad en los documentos. La
                    instalación de esta extensión se realiza desde LibreOffice, en la
                    pestaña de Herramientas y Extensiones. Allí se debe buscar el
                    archivo OXT. Luego de reiniciar el OpenOffice, se encontrará la
                    extensión en la pestaña Herramientas.
                </p>
                <p class="d-flex gap-3 align-items-center justify-content-center">
                    <b class="titulosMod3">Enlace</b>
                    <a href="https://extensions.libreoffice.org/en/extensions/show/accessodf" target="_blank"
                        rel="noreferrer">
                        https://extensions.libreoffice.org/en/extensions/show/accessodf
                    </a>
                </p>

                <p>
                    <b class="tituloMod3">Comprobación de accesibilidad Office: </b>
                    El paquete de Office proporciona una alternativa para comprar
                    algunas características de accesibilidad en un documento de Word y
                    Power Point. El uso del Comprobador de Accesibilidad, permite
                    revisar el texto alternativo en las imágenes, el contraste entre el
                    color de la fuente con el fondo y el panel de navegación.
                </p>

                <p class="d-flex gap-3 align-items-center justify-content-center">
                    <b class="titulosMod3">Enlace</b>
                    <a href="https://acortar.link/h6WF4z" target="_blank" rel="noreferrer">
                        https://acortar.link/h6WF4z
                    </a>
                </p>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-3', ['page'=>2]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-3', ['page'=>4]) }}">Siguiente</a></button>

            </div>
        </div>
    </div>

</x-app-layout>
