<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <div class="diseñoTablaImagen">
                    <img class="diseñoTablaIMG PP1" src="{{ asset('imagenes_mod2/PPimagen1.png') }}"
                        alt="tabla ejemplos de que usar y que no" />
                    <img class="diseñoTablaIMG PP2L" src="{{ asset('imagenes_mod2/PPimagen2.png') }}"
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
