<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <h2 class="titulos titulosCentros">Modulo 2</h2>
                <h3 class="titulos titulosCentros">Presentaciones</h3>

                <h4 class="titulos">1. Introducción</h4>
                <p>
                    Esta guía está orientada para ofrecer algunas recomendaciones para
                    la elaboración de presentaciones accesibles en formatos digitales,
                    para que de esta forma todas las personas puedan participar en
                    igualdad de condiciones en estas actividades.
                </p>
                <h4 class="titulos">
                    2. Herramientas recomendadas para elaborar presentaciones accesibles
                </h4>
                <p>
                    Al día de hoy existen muchos programas para crear presentaciones
                    hechas en diapositivas, sin embargo, las que destacan por el alcance
                    y popularidad que tienen son PowerPoint de Microsoft y
                    Presentaciones de Google
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>
                                <b class="titulos">PowerPoint:</b> Es un programa que
                                sirve para hacer presentaciones en diapositivas, se usan
                                textos, imágenes, videos, animaciones de texto e imágenes,
                                para transmitir información de manera fácil e ilustrativa, se
                                pueden hacer diseños propios o se pueden usar plantillas
                                predefinidas.
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <b class="titulos">Presentaciones:</b> Presentaciones de
                                Google es un programa de presentaciones en línea que te
                                permite crear y dar formato a presentaciones y trabajar con
                                otras personas al tiempo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-2', ['page'=>2]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
