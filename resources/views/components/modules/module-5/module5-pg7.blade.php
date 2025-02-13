<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod5">
        <div class="col-sm modulo5 m1">
            <div>
                <div class="diseñoTablaTextoImagen">
                    <div>
                        <h5 class="titulosMod5">FROAC</h5>
                        <p>
                            <b class="titulosMod5">Enlace </b>
                            <a href="http://gaia.manizales.unal.edu.co/froacAA/" target="_blank" rel="noreferrer">
                                http://gaia.manizales.unal.edu.co/froacAA/
                            </a>
                        </p>
                        <p>
                            FROAC es la sigla en español de la Federación de Repositorios de
                            Objetos de Aprendizaje de Colombia, que surge como resultado del
                            proyecto de investigación financiado por COLCIENCIAS titulado:
                            “ROAC Creación de un modelo para la Federación de OA en Colombia
                            que permita su integración a confederaciones internacionales”,
                            de la Universidad Nacional de Colombia.
                        </p>
                        <p>
                            FROAC cuenta con una barra de herramientas de accesibilidad que
                            se adapta a las preferencias y/o necesidades de los usuarios.
                            Esta barra ofrece herramientas para adaptación de la interfaz,
                            lectura de pantalla, narración, interpretación en lengua de
                            señas y reconocimiento de voz.
                        </p>
                    </div>
                    <div class="diseñoFilaImagenImagen">
                        <img class="diseñoTablaIMG logoFROACMod5" src="{{ asset('imagenes_mod5/FROAC.png') }}"
                            alt="tabla ejemplos de que usar y que no" />
                        <img class="diseñoTablaIMG logoInterface4Mod5" src="{{ asset('imagenes_mod5/FROAC1.png') }}"
                            alt="tabla ejemplos de que usar y que no" />
                    </div>
                </div>
            </div>

            <div class="twoButtons mt-3">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSalir">Salir</button>

                <div>
                    <button class="buttonModEnviar">
                        Terminar
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
