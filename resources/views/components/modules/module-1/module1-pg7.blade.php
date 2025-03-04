<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <h5 class="titulosMod1">DISCAPACIDAD MOTRIZ</h5>
                <p>
                    Esta discapacidad motriz es considerada una alteración de la
                    capacidad de movilidad, que impide que las personas realicen
                    movimientos finos, o moverse adecuadamente, afectando diversas
                    funciones del cuerpo en cuanto al desplazamiento, manipulación y
                    respiración. Esta población es muy amplia, ya que puede abarcar
                    diferentes partes del cuerpo, además restringe el desarrollo de
                    estas personas con su contexto social y personal (OMS, 2001).
                </p>
                <p>
                    Las tecnologías pueden ajustarse para que personas que tengan este
                    tipo de discapacidad, especialmente donde se vean afectadas las
                    extremidades superiores, puedan tener una mejor interacción con
                    dispositivos táctiles, a través de adaptaciones que permitan el uso
                    de herramientas tecnológicas. De igual forma, es importante adecuar
                    materiales pedagógicos de acuerdo a las necesidades que tenga el
                    estudiante, utilizando las herramientas tecnológicas que existen
                    actualmente (Tabares-Morales, V. 2019).
                </p>
                <h5 class="titulosMod1">DISCAPACIDAD COGNITIVA</h5>
                <p>
                    Las personas con discapacidad cognitiva se caracterizan por tener
                    ciertas condiciones que limitan sus funciones mentales,
                    intelectuales y cognitivas, afectando su desarrollo, su conducta
                    adaptativa, conceptual y social, derivado de dificultades en la
                    comunicación, memoria y atención, procesos fundamentales para una
                    vida académica y social autónoma (OMS, 2001).
                </p>
                <p>
                    Es importante resaltar que las dificultades cognitivas son diversas,
                    las causas pueden ser variadas y tienen características específicas,
                    es por esto que los apoyos educativos deben ser individualizados,
                    según las necesidades del estudiante. Para esto, los docentes pueden
                    apoyarse en materiales y contenidos tecnológicos existentes,
                    generando una mayor interacción con estas herramientas, pero es
                    primordial tener presente que, por lo general, las personas con
                    discapacidad cognitiva tienen limitaciones en su capacidad de
                    lectura, en sus procesos de razonamiento, falta de atención, en la
                    comprensión y razonamiento lingüístico y matemático (Rivas-Costa et
                    al., 2014) (Tabares-Morales, V. 2019).
                </p>
            </div>
            <div class="twoButtons">
                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0" href="{{ route('module-1', ['page'=>6]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0" href="{{ route('module-1', ['page'=>8]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
