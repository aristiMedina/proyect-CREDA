<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod4">
        <div class="col-sm modulo4 m1">
            <div>
                <h2 class="titulosMod4 titulosCentros">Modulo 4</h2>
                <h3 class="titulosMod4 titulosCentros">Videos Accesibles</h3>

                <h4 class="titulosMod4">1. Introducción</h4>
                <p>
                    Los videos son elementos audiovisuales que se ajustan al concepto de
                    material de apoyo o complementario en diversos ambientes. El uso de
                    videos es común en ambientes educativos, dada la facilidad que
                    representa en términos de replicabilidad y que algunas personas se
                    adaptan adecuadamente al uso de estos recursos. Sin embargo, existen
                    algunas características en términos de inclusión que deben ser
                    tenidas en cuenta, con el objetivo de que el contenido del video sea
                    comprensible por la mayor cantidad de personas. Por esta razón, la
                    comunidad científica realiza algunas recomendaciones sobre las
                    características que se deben tener en cuenta para crear videos con
                    características de inclusión (García-Cabrera et al., 2017), (Rivero
                    & Vera, 2020), (Segrera et al., 2017).
                </p>
            </div>
            <div>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-4', ['page'=>2]) }}">Siguiente</a></button>

            </div>
        </div>
    </div>

</x-app-layout>
