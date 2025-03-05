<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <h4 class="titulosMod1">
                    3. Principios de Diseño Universal para el Aprendizaje
                </h4>
                <p>
                    El Diseño Universal para el aprendizaje (DUA), hace referencia al
                    modelo que promueve un enfoque inclusivo en la enseñanza, a partir
                    de propuestas que involucren la práctica, la investigación, las
                    teorías del aprendizaje, los avances tecnológicos y en neurociencia.
                    El objetivo del DUA es promover la igualdad de oportunidades en los
                    procesos de aprendizaje, partiendo de la diversidad, promoviendo
                    currículos más flexibles y asequibles para todos los estudiantes
                    (Alba Pastor, 2017).
                </p>
                <p>Existen tres principios los cuales son:</p>
                <h5 class="titulosMod1">3.1 NORMATIVIDAD</h5>
                <p class="m-0">
                    <b class="titulosMod1">INTERNACIONAL:</b>
                </p>
                <ul>
                    <li>
                        Declaración Americana de los Derechos y Deberes del Hombre 1948
                        Art. XIII: Educación inspirada en libertad y solidaridad.
                    </li>
                    <li>
                        Conferencia Mundial sobre Educación para todos, Jomtiemn 1990:
                        Deber de las naciones garantizar el acceso educativo a todas las
                        personas.
                    </li>
                    <li>
                        Conferencia Mundial sobre Necesidades Educativas Especiales,
                        Salamanca, 1994: Integración educativa Acceso a las escuelas
                        regulares Pedagogías centradas en los niños.
                    </li>
                    <li>
                        Conferencia internacional de educación. Cuadragésima octava
                        reunión. «La educación inclusiva: el camino hacia el futuro», 2008
                        Educación inclusiva como proceso permanente, cuyo objetivo es
                        ofrecer una educación de calidad para todos.
                    </li>
                    <li>
                        Convención sobre los derechos de las personas con discapacidad ONU
                        2006. Que promueve, protege y asegura el goce pleno y en
                        condiciones de igualdad de todos los derechos humanos y libertades
                        fundamentales por todas las personas con Discapacidad.
                    </li>
                </ul>
            </div>
            <div class="twoButtons">
                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-1', ['page'=>2]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-1', ['page'=>4]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
