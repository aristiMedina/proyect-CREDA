<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-md-8 shadow-lg contendorMod mod1">
        <div class="col-md modulo1 m1">
            <div>
                <h2 class="titulosMod1 titulosCentros">Modulo 1</h2>
                <h3 class="titulosMod1 titulosCentros">
                    1. Introducción - concientización
                </h3>
                <p>
                    Te damos la bienvenida a esta unidad en la que podrás adquirir
                    conocimientos básicos sobre algunos conceptos primordiales para la
                    educación inclusiva, de igual forma te mostraremos algunas
                    normativas y una actividad reflexiva.
                </p>
                <h5 class="titulosMod1">CONCEPTOS BASICOS</h5>
                <ul>
                    <li>
                        <b class="titulosMod1">Ajustes Razonables: </b>
                        Según la definición dada por la convención Internacional de las
                        personas con discapacidad (2008), se entiende como ajustes
                        razonables a las modificaciones y adaptaciones necesarias y
                        adecuadas que no impongan una carga desproporcionada o indebida,
                        cuando se requieran en un caso particular, para garantizar a las
                        personas con discapacidad el goce o ejercicio, en igualdad de
                        condiciones con las demás, de todos los derechos humanos y
                        libertades fundamentales. Tomado de:
                        https://www.un.org/esa/socdev/enable/documents/tccconvs.pdf
                    </li>
                    <li>
                        <b class="titulosMod1">Capacidad: </b>
                        Referida a los recursos y posibilidades que expanden la libertad
                        humana para vivir el tipo de vida que las personas consideran
                        valiosa e incrementar así sus posibilidades reales de elegir
                        oportunidades para llevar una vida más libre y digna. Tomado de:
                        http://www.legal.unal.edu.co/rlunal/home/doc.jsp?d_i=87187
                    </li>
                    <li>
                        <b class="titulosMod1">Diseños Inclusivos: </b>
                        Son aquellos productos y servicios que han sido diseñados para que
                        puedan ser usados por la mayor cantidad de personas posibles,
                        entendiendo que la población usuaria es diversa en edades,
                        condiciones y habilidades. Tomado de:
                        http://www.legal.unal.edu.co/rlunal/home/doc.jsp?d_i=87187
                    </li>
                    <li>
                        <b class="titulosMod1">Equidad: </b>
                        La equidad comprende un trato justo a las personas, dando a cada
                        cual lo que le pertenece a partir del reconocimiento de las
                        condiciones y las características específicas, por lo tanto
                        significa justicia, reconocimiento de la diversidad y eliminación
                        de cualquier actitud o acción discriminatoria. Tomado de:
                        http://www.asamblea.go.cr/ci/ciev/Documentos%20compartidos/VALORES%20-%20PEI%20-%20Igualdad.pdf
                    </li>
                    <li>
                        <b class="titulosMod1">Perspectiva de interseccionalidad: </b>
                        Enfoque conceptual que enfatiza en las múltiples y simultáneas
                        articulaciones entre distintas formas de dominación en las
                        diferentes escalas sociales (micro, meso y macro). Tomado de:
                        http://www.legal.unal.edu.co/rlunal/home/doc.jsp?d_i=87187
                    </li>
                    <li>
                        <b class="titulosMod1">Usabilidad: </b>
                        Es el grado de facilidad en el uso de un tipo de producto y del
                        tipo de satisfacción que genere ese uso en el usuario. Se asocia
                        especialmente, al uso de tecnologías y medios informáticos. Tomado
                        de: http://www.legal.unal.edu.co/rlunal/home/doc.jsp?d_i=87187
                    </li>
                    <li>
                        <b class="titulosMod1">Accesibilidad: </b>
                        La accesibilidad es un concepto que representa la facilidad con la
                        que una persona puede acceder a un producto o servicio sin importa
                        sus condiciones. En este contexto la accesibilidad se entiende
                        desde el punto de vista de la inclusión, donde deberían tenerse en
                        cuenta las características de todos los usuarios ofreciendo
                        iguales oportunidades para todos. La definición de accesibilidad
                        está estrechamente ligada con el área de conocimiento, la cultura
                        o los grupos de interés, clasificándolo en algunos casos en:
                        física o arquitectónica, de medios y equipamientos, y de
                        contenidos. (Tabares-Morales, V. 2019)
                    </li>
                    <li>
                        <b class="titulosMod1">Accesibilidad Web: </b>
                        Este concepto hace referencia a un diseño web que permite que
                        cualquier persona pueda percibir, entender, navegar e interactuar
                        con los contenidos presentados. Tomada de:
                        http://boppo.udg.edu:8000/ATutor/content.php?cid=2030
                    </li>
                    <li>
                        <b class="titulosMod1">Tecnologías Asistivas: </b>
                        Tecnologías usadas para lograr una mayor independencia y realzar
                        la calidad de vida.
                        <ul>
                            <li>
                                <b class="titulosMod1">Dispositivos: </b>
                                Son piezas o artículos usados para mejorar las capacidades
                                funcionales, ayudando en tareas de la vida diaria como
                                dispositivos auditivos y sistemas de aumento para la vista.
                            </li>
                            <li>
                                <b class="titulosMod1">Servicios: </b>
                                Se refieren al apoyo y asistencia para el uso de los
                                dispositivos asistivos.
                            </li>
                        </ul>
                    </li>
                    <b>Tomado de: </b>material curso Gestión de Recursos Educativos Digitales.
                    Docente Valentina Tabares Morales. Universidad Nacional Sede
                    Manizales.
                </ul>
            </div>
            <div>
                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0" href="{{ route('module-1', ['page'=>2]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
