<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod5">
        <div class="col-sm modulo5 m1">
            <div>
                <h3 class="titulosMod5 ">GAIA Tools</h3>

                <div class="diseñoTablaTextoImagen">
                    <div>
                        <p>
                            <b class="titulosMod5">Enlace </b>
                            <a href="http://gaia.manizales.unal.edu.co/GAIATools/controlador/index.php" target="_blank"
                                rel="noreferrer">
                                http://gaia.manizales.unal.edu.co/GAIATools/controlador/index.
                                php
                            </a>
                        </p>
                        <p>
                            La plataforma GAIA Tools está concebida bajo la idea del
                            desarrollo de un conjunto de herramientas de autor donde se
                            logra la gestión adecuada en el proceso de construcción
                            accesible de objetos de aprendizaje. La herramienta permite la
                            clasificación de los objetos de aprendizaje a través de la
                            identificación del área y sub-área de conocimiento al cual
                            apuntará su contenido, también permite hacer relación con algún
                            tipo o caracterización de usuario con el fin de personalizar su
                            presentación o disponibilidad, la plataforma permite la
                            construcción de objetos de aprendizaje para personas sin
                            discapacidad, con discapacidad visual o discapacidad auditiva.
                        </p>
                    </div>
                    <img class="diseñoTablaIMG" src="{{ asset('imagenes_mod5/gaiaTools.png')}} "
                        alt="tabla ejemplos de que usar y que no" />
                </div>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
