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

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
