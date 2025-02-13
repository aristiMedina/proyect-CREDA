<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod5">
        <div class="col-sm modulo5 m1">
            <div>
                <div class="diseñoTablaTextoImagen">
                    <div>
                        <img class="diseñoTablaIMG logoManosMod5"
                            src="{{ asset('imagenes_mod5/aprendiendoLenguaSeñasColombiana.png')}} "
                            alt="tabla ejemplos de que usar y que no" />
                        <h5 class="titulosMod5">Sus líneas de investigación son:</h5>
                        <p>
                            <b class="titulosMod5">Enlace </b>
                            <a href="http://gaia.manizales.unal.edu.co/lengua_senas/" target="_blank" rel="noreferrer">
                                http://gaia.manizales.unal.edu.co/lengua_senas/
                            </a>
                        </p>

                        <p>
                            Herramienta que permite el aprendizaje de forma evaluativa de la
                            Lengua de Señas Colombiana, busca dar un conocimiento de la
                            lengua en diferentes ámbitos no muy profundos pero esenciales
                            como los números, el alfabeto y algunos relacionados a la vida
                            diaria como objetos, alimentos y animales.
                        </p>
                        <p>
                            La herramienta tiene como objetivo apoyar desde la tecnología,
                            la adopción de estrategias que permitan que las comunidades
                            oyentes y no oyentes lleven a cabo procesos de aprendizaje
                            efectivos y de calidad. Este recurso educativo web se crea para
                            el aprendizaje de conocimientos básicos de la Lengua de Señas
                            Colombiana (LSC).
                        </p>
                    </div>
                    <div class="diseñoFilaImagenImagen">
                        <img class="diseñoTablaIMG logoInterface1Mod5"
                            src="{{ asset('imagenes_mod5/aprendiendoLenguaSeñasColombiana1.png') }}"
                            alt="tabla ejemplos de que usar y que no" />
                        <img class="diseñoTablaIMG logoInterface1Mod5"
                            src="{{asset('imagenes_mod5/aprendiendoLenguaSeñasColombiana2.png')}}"
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
