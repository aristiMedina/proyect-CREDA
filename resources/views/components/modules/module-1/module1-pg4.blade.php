<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <h5 class="titulosMod1">NACIONAL: </h5>
                <p class="m-0">
                    <b class="titulosMod1">Constitución Política de Colombia: </b>
                </p>
                <ul>
                    <li>
                        Artículo 13 ° DE LA CONSTITUCIÓN POLITICA DE COLOMBIA: Derecho
                        fundamental a la igualdad, el MEN promueve la protección del
                        derecho a la educación de todas las niñas, niños y jóvenes en
                        cualquier condición.
                    </li>
                    <li>
                        El artículo 68 de la Constitución califica como obligación
                        especial del Estado «la educación de personas con limitaciones
                        físicas o mentales, o con capacidades excepcionales».
                    </li>
                    <li>
                        Artículos 350, 356 y 357 determina que las autoridades nacionales
                        y territoriales destinan obligatoriamente un porcentaje importante
                        de recursos a la educación.
                    </li>
                </ul>
                <p>
                    <b class="titulosMod1">Decreto 2082, 199: </b>
                    Reglamenta la atención educativa para personas con limitaciones, o
                    con capacidades y talentos excepcionales.
                </p>
                <p>
                    <b class="titulosMod1">Ley Estatutaria 1618 de 2013: </b>
                    Por la cual se establecen las disposiciones para garantizar el pleno
                    ejercicio de los derechos de las personas con discapacidad”.
                </p>
                <p>
                    <b class="titulosMod1">Decreto 1421 de 2017: </b>
                    Por el cual se reglamenta en el marco de la educación inclusiva la
                    atención educativa a la población con Discapacidad.
                </p>
                <p>
                    <b class="titulosMod1">
                        Resolución 113 de 2020 del Ministerio de Salud y Protección
                        Social:
                    </b>
                    Por la cual se determinan los criterios para la asignación y
                    distribución de recursos para la implementación de la certificación
                    de discapacidad y el Registro de Localización y Caracterización de
                    Personas con Discapacidad por parte de las entidades territoriales.
                </p>
                <p>
                    <b class="titulosMod1">DECRETO 1421 DE 2017: </b>
                    Para la atención educativa a personas con discapacidad en el marco
                    de la educación inclusiva.
                </p>
                Tomado de: Observatorio de Inclusión Educativa para Personas con
                Discapacidad. Universidad Nacional de Colombia. Material Taller
                Educación Inclusiva Personas en Condición de Enfermedad. Fundación
                Colombianos por la Inclusión.
            </div>
            <div class="twoButtons">
                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-1', ['page'=>3]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-1', ['page'=>5]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
