<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <h4 class="titulosMod1">2. Discapacidad</h4>
                <p>
                    La discapacidad es entendida como la interacción entre algunos
                    factores como lo son: los estados de salud, entre ellos
                    enfermedades, lesiones, trastornos, traumas; y factores
                    contextuales, entre los que están los factores personales y
                    ambientales, este último constituye alguna barrera física, social y
                    actitudinal. Estos factores restringen el desempeño, desarrollo y
                    participación de los individuos (OMS, 2001).
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    Según la OMS (2011), en promedio el 15% de la población
                                    mundial vive con algún tipo de discapacidad.
                                </li>
                                <li>
                                    Se estima que más de mil millones de personas a diario deben
                                    enfrentarse a obstáculos como políticas y normas
                                    insuficientes, actitudes negativas, problemas con la
                                    prestación de servicios, financiación insuficiente y falta
                                    de accesibilidad.
                                </li>
                                <li>
                                    A partir de datos entregados por el Ministerio de Salud y
                                    Protección Social (2018), en Colombia a través del Registro
                                    de discapacidad RLCPD se ha establecido que el 2.9%
                                    (1.448.889) de la población tiene algún tipo de
                                    discapacidad.
                                </li>
                                <li>
                                    De la anterior cifra el 17.16% (248.584) se encuentra en
                                    etapa escolar (entre los 5 y 24 años de edad) de los cuales
                                    el 40% reportan estar desescolarizados, y según lo que en su
                                    mayoría indican, es por causa de su discapacidad.
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="diseñoFilaTextoImagenMod1">
                                <img class="diseñoTablaIMG tablaConceptoDiscapacidad"
                                    src="{{ asset('imagenes_mod1/modelosConceptoDiscapacidad.jpg') }}"
                                    alt="Fuente: tomada de (Ministerio de Educación Nacional, 2017)" />
                                <p>
                                    “La diversidad no es vista como un problema a superar, sino
                                    como un recurso enriquecedor para apoyar el aprendizaje de
                                    todos” (Booth, Ainscow, Black-Hawkins, Vaughen y Show)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="twoButtons">
                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0" href="{{ route('module-1', ['page'=>1]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0" href="{{ route('module-1', ['page'=>3]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
