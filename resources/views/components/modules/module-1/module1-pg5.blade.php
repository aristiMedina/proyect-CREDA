<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <h4 class="titulosMod1">3.2 DISCAPACIDADES</h4>
                <h5 class="titulosMod1">DISCAPACIDAD VISUAL</h5>
                <p>
                    Al hablar de discapacidad visual, se está reconociendo a las
                    personas ciegas o con baja visión. Esta discapacidad es de tipo
                    sensorial, y se asocia a la afectación de la agudeza visual, campo
                    visual y percepción de luz. Las personas que tienen esta
                    discapacidad, son individuos que cuentan con características
                    cognitivas que pueden desarrollar a través de estímulos sensoriales
                    que les permite desarrollarse y construir su contexto (OMS, 2001).
                </p>
                <img class="diseñoTablaIMG tablaDiscapacidades" src="{{asset('imagenes_mod1/tablaDiscapacidades.jpg')}}"
                    alt="tabla ejemplos de que usar y que no" />
                <p>
                    Los estudiantes con discapacidad visual, pueden presentar algunas
                    dificultades en su proceso educativo, afectando el rendimiento en
                    los procesos de lectura y escritura, déficit en la identificación de
                    detalles en las guías de trabajo, actividades en las que se utiliza
                    el tablero, video beam y carteles, restricciones para movilizarse y
                    trasladarse de un lugar a otro, e incluso los alumnos que presentan
                    esta condición tienen dificultades para interactuar y relacionarse
                    socialmente.
                </p>
                <img class="diseñoTablaIMG imagenAbordajePedagogico"
                    src="{{asset('imagenes_mod1/abordajePedagogico.jpg')}}" alt="tabla ejemplos de que usar y que no" />
                <p>
                    Es por esto que estos estudiantes pueden requerir de apoyos
                    técnicos, en los que se incluyen espacios de aprendizaje orientados
                    al uso de tecnologías, que puedan brindar apoyo a las instituciones
                    educativas, para poder ofrecer diversas herramientas como lo son el
                    sistema braille, información de manera auditiva, como un software
                    lector de pantalla, entre otras (Ministerio de Educación Nacional,
                    2017) (Tabares-Morales, V. 2019).
                </p>
                <p>
                    A pesar de que las tecnologías pueden brindar grandes posibilidades
                    para el desenvolvimiento de estudiantes con discapacidad visual, la
                    mayoría de contenidos que se pueden encontrar fácilmente son de
                    carácter visual, es por esto que se requieren mecanismos que puedan
                    transmitir información de forma auditiva, evitando información
                    codificada por colores (Rivas-Costa et al., 2014) (Tabares-Morales,
                    V. 2019).
                </p>
            </div>
            <div class="twoButtons">
                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-2 px-4" href="{{ route('module-1', ['page'=>4]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-2 px-4" href="{{ route('module-1', ['page'=>6]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
