<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <h4 class="titulos">3.8 Orden de lectura</h4>
                <p>
                    Se debe tener en cuenta que los lectores de pantalla leen los
                    contenidos de cada diapositiva según el orden en cual fueron
                    agregados los elementos, puede que no coincida con el orden en el
                    cual el expositor presenta la información. Al usar los diseños de
                    los temas integrados en Powerpoint o presentaciones de Google se
                    garantizan los espacios predeterminados del título y el cuerpo de la
                    diapositiva ya que vienen con un orden lógico
                </p>
                <p>
                    También es útil usar las herramientas disponibles para comprobar que
                    el orden de los elementos de las diapositivas es el deseado. Cada
                    programa también tiene la opción de mostrar la posición de los
                    elementos en la diapositiva.
                </p>
                <p>
                    PowerPoint: en la pestaña de Inicio, en el grupo Dibujo, se debe
                    hacer clic en Organizar, y una vez ahí se debe seleccionar el Panel
                    de selección. Aquí es posible cambiar el orden de lectura
                    arrastrando y colocando los elementos en una nueva ubicación.
                </p>
                <p>
                    En presentaciones de Google para cambiar el orden de las
                    diapositivas, es necesario seleccionar el objeto que debe ser
                    reorganizado. Luego, hay que ir al menú Estructura y hacer clic en
                    Ordenar. Los elementos que están más abajo son leídos primero que
                    los que están más arriba por lo que hay que cambiar el orden hasta
                    que sea el indicado.
                </p>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
