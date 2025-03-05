<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <h4 class="titulos">3.3 Imágenes</h4>
                <p>
                    Las imágenes, fotografías, dibujos, diagramas son muy utilizados en
                    las presentaciones porque agregan información y hacen dinámica la
                    presentación. Para que estos elementos sean accesibles hay que tener
                    en cuenta el contraste adecuado con el tema de diapositiva que se
                    haya escogido Cada elemento empleado en la presentación debe contar
                    con una descripción o texto alternativo ya que los lectores de
                    pantalla captan lo que se está mostrando, esto es importante ya que
                    los textos alternativos solo serán visibles para los lectores de
                    pantalla
                </p>
                <p>
                    Cada programa cuenta con la opción de agregar textos alternativos:
                </p>

                <h4 class="titulos">En PowerPoint</h4>
                <p>
                    Hacer click en el botón derecho del mouse en tamaño y posición, se
                    abre formato de imagen y en la parte inferior está la opción de
                    texto alternativo:
                </p>
            </div>
            <div class="twoButtons">

                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-2', ['page'=>3]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-2', ['page'=>5]) }}">Siguiente</a></button>

            </div>
        </div>
    </div>

</x-app-layout>
