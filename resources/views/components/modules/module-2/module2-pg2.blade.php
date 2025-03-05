<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <h4 class="titulos">3.1 Tema y diseño de las diapositivas</h4>
                <p>
                    Tanto PowerPoint como Presentaciones de Google tienen diferentes
                    plantillas en que se pueden poner texto, imágenes y diagramas, es
                    importante seleccionar un tema que brinde un contraste adecuado
                    entre las letras y el fondo de la diapositiva. Una herramienta web
                    que permite evaluar el uso correcto del contraste de los colores es <br>
                    <a href="https://webaim.org/resources/contrastchecker/" target="_blank" rel="noreferrer">
                        https://webaim.org/resources/contrastchecker/
                    </a>
                </p>
                <h5 class="titulos">Nota - </h5>
                <p>
                    Se recomienda evitar diseños de diapositivas con muchas imágenes,
                    dibujos o figuras de fondos, ya que genera distracción en la
                    audiencia PowerPoint tiene plantillas con temas que han sido
                    mejorados para que las personas con discapacidad visual puedan
                    emplearlos, se pueden descargar en <br>
                    <a href="https://templates.office.com/en-us/accessible-powerpoint-template-sampler-tm16401472"
                        target="_blank" rel="noreferrer">
                        https://templates.office.com/en-us/accessible-powerpoint-template-sampler-tm16401472
                    </a>
                </p>
                <h4 class="titulos">3.2 Tipo de letra</h4>
                <p>
                    Es muy importante tener en cuenta el tipo de letra o fuente que se
                    utilice al momento de realizar la presentación, se recomiendan
                    letras sencillas y sin adornos. algunos ejemplos son:
                </p>
            </div>
            <div class="twoButtons">

                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-2', ['page'=>1]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-2', ['page'=>3]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
