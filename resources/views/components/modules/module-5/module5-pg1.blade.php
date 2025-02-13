<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod5">
        <div class="col-sm modulo5 m1">
            <div>
                <h2 class="titulosMod5 titulosCentros">Modulo 5</h2>
                <h3 class="titulosMod5 titulosCentros">Herramientas de GAIA</h3>
                <p>
                    Bienvenido a la unidad 5, aquí podrás encontrar algunas herramientas
                    que se han desarrollado desde el grupo de investigación en Ambientes
                    Inteligentes Adaptativos (GAIA) de la Universidad Nacionalsede
                    Manizales, el cual fue creado en el año 2001, orientado a la
                    Seguridad y Auditoría de Sistemas, y en el 2005 tomó el actual
                    nombre e incorporó nuevas líneas de investigación permitiendo la
                    vinculación de nuevos investigadores.
                </p>
                <p>
                    Actualmente es un grupo multidisciplinario conformado por
                    profesionales orientados a la investigación en Tecnologías de la
                    Información y Comunicación TIC tanto en la fundamentación como en
                    las aplicaciones en problemas del mundo real.
                </p>
                <div class="diseñoTablaTextoImagen">
                    <div>
                        <p>Sus líneas de investigación son:</p>
                        <ul>
                            <li>Inteligencia Artificial</li>
                            <li>TIC en Educación y Sistemas Adaptativos</li>
                            <li>Análisis y Minería de Datos</li>
                            <li>Seguridad y Auditoría de Sistemas</li>
                        </ul>
                    </div>
                    <img class="diseñoTablaIMG logoGAIAMod5" src="{{ asset('imagenes_mod5/logoGAIA.png')}} "
                        alt="tabla ejemplos de que usar y que no" />
                </div>
            </div>

            <div>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
