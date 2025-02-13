<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod5">
        <div class="col-sm modulo5 m1">
            <div>
                <div class="diseñoTablaTextoImagen">
                    <div>
                        <h5 class="titulosMod5">Indilenguas</h5>
                        <p>
                            <b class="titulosMod5">Enlace </b>
                            <a href="http://gaia.manizales.unal.edu.co/indilenguas/" target="_blank" rel="noreferrer">
                                http://gaia.manizales.unal.edu.co/indilenguas/
                            </a>
                        </p>
                        <p>
                            INDILENGUAS es una plataforma etnoeducativa que permite el
                            aprendizaje y fortalecimiento de las culturas indígenas de
                            nuestro país, actualmente los recursos digitales etnoeducativos
                            disponibles son para la cultura Embera Chami de Caldas.
                        </p>
                        <p>
                            En su página principal se encuentra un menú que permite el
                            acceso a la cultura, donde se abre un portal que contiene
                            diversos recursos etnoeducativos, enmarcados en 5 categorías,
                            con las que se tiene como objetivo mostrar la riqueza cultural
                            del pueblo indígena. Cada elemento que compone la plataforma
                            está diseñado pensando en el usuario, en su entorno, su cultura,
                            sus hábitos, y sus costumbres, de tal modo que se incremente el
                            interés en la comunidad por utilizar las TICs como medio para
                            potencializar la etnoeducación y preservar su cultura.
                        </p>
                    </div>
                    <div class="diseñoFilaImagenImagen">
                        <img class="diseñoTablaIMG logoIndilenguasMod5" src="{{ asset('imagenes_mod5/Indilenguas.png')}} "
                            alt="tabla ejemplos de que usar y que no" />
                        <img class="diseñoTablaIMG logoInterface2Mod5" src="{{ asset('imagenes_mod5/Indilenguas1.png') }}"
                            alt="tabla ejemplos de que usar y que no" />
                    </div>
                </div>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
