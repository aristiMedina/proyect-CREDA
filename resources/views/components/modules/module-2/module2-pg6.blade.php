<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <p>
                    En Presentaciones de Google también se puede agregar la opción de
                    texto alternativo, click derecho sobre la imagen y se escoge la
                    opción de texto alternativo, también se puede seleccionar las teclas
                    CTRL+ALT+Y
                </p>
                <div class="diseñoTablaImagen">
                    <img class="diseñoTablaIMG PP1" src="{{ asset('imagenes_mod2/PGimagen1.png') }}"
                        alt="tabla ejemplos de que usar y que no" />
                    <img class="diseñoTablaIMG PP2" src="{{ asset('imagenes_mod2/PGimagen2.png') }}"
                        alt="tabla ejemplos de que usar y que no" />
                </div>
            </div>
            <div class="twoButtons">

                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-2', ['page'=>5]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-2', ['page'=>7]) }}">Siguiente</a></button>

            </div>
        </div>
    </div>

</x-app-layout>
