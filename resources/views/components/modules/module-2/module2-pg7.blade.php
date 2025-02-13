<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <h4 class="titulos">3.4 Vídeos</h4>
                <p>
                    Es común incluir vídeos dentro de las presentaciones ya que son una
                    forma diferente de la información al público, es más didáctico y
                    capta la atención, para que todos puedan acceder a esta información
                    (personas con discapacidad visual y/o auditiva), es necesario
                    realizar algunos ajustes.
                </p>
                <ul>
                    <li>
                        Se puede incluir un intérprete de lengua o Sistema de Signos
                        Internacionales (SSI) de acuerdo al público que vaya dirigido
                    </li>
                    <li>
                        Es importante que el video cuente con subtítulos que correspondan
                        a la transcripción de los diálogos, sonido o ruido ambiente, puede
                        ser en el idioma original o en otro de preferencia
                    </li>
                </ul>
                <h4 class="titulos">3.5 Tablas</h4>
                <p>
                    Es importante que las tablas tengan una estructura simple para que
                    sean accesibles, por lo tanto, se debe evitar las tablas anidadas,
                    celdas combinada o divididas y columnas o filas vacías, estas
                    recomendaciones son importantes ya que los lectores de pantallas
                    navegan por una tabla contando las celdas de estas, si una tabla
                    está anidada o combinada, el lector pierde la cuenta y no puede
                    interpretar la información de forma adecuada.
                </p>
                <p>
                    Se usa el texto alternativo para que los lectores de pantalla puedan
                    leer el contenido de la tabla, entonces se debe escribir el
                    contenido de la tabla de forma detallada para que todos puedan tener
                    acceso a la información de la tabla
                </p>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
