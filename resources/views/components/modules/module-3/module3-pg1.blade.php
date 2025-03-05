<x-app-layout auth='{{ $isAuth }}'>
    <div class="col-sm-8 shadow-lg contendorMod mod3">
        <div class="col-sm modulo3 m1">
            <div>
                <h2 class="titulosMod3 titulosCentros">Modulo 3</h2>
                <h3 class="titulosMod3 titulosCentros">Documentos Accesibles</h3>

                <h4 class="titulosMod3">1. Introducción</h4>
                <p>
                    Actualmente la información maneja en mayor medida por medios
                    digitales, en particular, los archivos Word y PDF constituyen una
                    alternativa para ahorrar costos de impresión. Sin embargo, en
                    términos de inclusión, se presenta el caso de personas en
                    condiciones particulares, que no pueden acceder de manera
                    tradicional al contenido de los documentos digitales, dada alguna
                    condición de discapacidad ya sea parcial o total. Buscando que el
                    contenido de los documentos sea comprensible para todos, a
                    continuación, se realizan algunas recomendaciones para la creación
                    de documentos con características accesibles, según lo mencionado en
                    (Complutense et al., 2011), (San et al., 2017), (Amado-Salvatierra &
                    Hernández, 2012).
                </p>
            </div>
            <div>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-3', ['page'=>2]) }}">Siguiente</a></button>

            </div>
        </div>
    </div>
</x-app-layout>
