<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <p>
                    <b>
                        Te invitamos a realizar este inclusiómetro, propuesta desarrollada
                        a partir de documento elaborado por el Observatorio de Inclusión
                        Educativa para Personas con Discapacidad – Universidad Nacional de
                        Colombia.
                    </b>
                </p>
                <img class="diseñoTablaIMG" src="{{asset('imagenes_mod1/Inclusometro.jpg')}}"
                    alt="Creación a partir de información de documento (Ministerio de Educación Nacional, 2017)" />

            </div>
            <div class="twoButtons">
                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-1', ['page'=>7]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-1', ['page'=>9]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
