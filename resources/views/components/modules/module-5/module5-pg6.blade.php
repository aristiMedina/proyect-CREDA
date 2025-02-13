<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod5">
        <div class="col-sm modulo5 m1">
            <div>
                <div class="diseñoTablaTextoImagen">
                    <div>
                        <h5 class="titulosMod5">
                            Herramienta para Apoyo a la Evaluación de Accesibilidad
                        </h5>
                        <p>
                            <b class="titulosMod5">Enlace </b>
                            <a href="http://gaia.manizales.unal.edu.co/aet/" target="_blank" rel="noreferrer">
                                http://gaia.manizales.unal.edu.co/aet/
                            </a>
                        </p>
                        <p>
                            AET -Accessibility Evaluation Tool- es una herramienta que tiene
                            como objetivo apoyar en el proceso de evaluación de
                            accesibilidad a sitios web de forma manual. Además, permite
                            integrar los resultados obtenidos de una evaluación automática
                            realizada con la herramienta eXaminator y así integrar ambos
                            resultados para finalmente generar un reporte del nivel de
                            accesibilidad en el que se encuentra el sitio, el cual podrá ser
                            consultado cada vez que el experto considere y de esta forma
                            realizar seguimiento a los sitios evaluados.
                        </p>
                    </div>
                    <div class="diseñoFilaImagenImagen">
                        <img class="diseñoTablaIMG logoAETMod5"
                            src="{{ asset('imagenes_mod5/herramientaApoyoEvaluaciónAccesibilidad.png') }}"
                            alt="tabla ejemplos de que usar y que no" />
                        <img class="diseñoTablaIMG logoInterface3Mod5"
                            src="{{ asset('imagenes_mod5/herramientaApoyoEvaluaciónAccesibilidad1.png') }}"
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
