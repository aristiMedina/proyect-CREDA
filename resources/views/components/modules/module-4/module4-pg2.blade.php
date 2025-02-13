<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod4">
        <div class="col-sm modulo4 m1">
            <div>
                <p>Recomendaciones Generales:</p>
                <ul>
                    <li>
                        En la medida de lo posible, los videos no superen una duración de
                        10 minutos.
                    </li>
                    <li>
                        Sincronía entre los elementos: El audio, el texto y las imágenes
                        del video deben proyectarse en pantalla al mismo tiempo (sincronía
                        entre los elementos).
                    </li>
                    <li>Usar un lenguaje claro, con voz activa.</li>
                    <li>
                        Control del volumen: Proporcionar un mecanismo que permita regular
                        el nivel del volumen del video al público objetivo.
                    </li>
                    <li>
                        Evitar distracciones: En caso de usar música de fondo, se
                        recomienda que sea lo más tranquila posible especialmente sin
                        letra.
                    </li>
                    <li>
                        Subtítulos: Los subtítulos son sustituyen el contenido sonoro,
                        funciona como un complemento. Además, los subtítulos no deben
                        estar grabados en el video como imagen (se recomienda el uso de
                        herramientas de subtitulado automático).
                    </li>
                    <li>
                        Personalización: Es posible personalizar aspectos como el idioma
                        de los subtítulos, calidad del video, velocidad de reproducción,
                        color del texto, tamaño de la fuente de los subtítulos, opacidad
                        color de fondo y tipo de letra. Estas características son
                        fácilmente alcanzables haciendo uso de herramientas de grabación.
                    </li>
                    <li>
                        Lengua de señas: Se recomienda en medida de lo posible, incluir
                        interprete de lengua de señas (ILS), dado que algunas personas
                        tienen como el lenguaje de señas como lengua nativa.
                    </li>
                    <li>
                        Evitar el uso de flashes o cambios en las luces: Los cambios
                        bruscos de luz, en el contraste y tonalidades de los videos, puede
                        generar ataques epilépticos
                    </li>
                </ul>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
