<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod2">
        <div class="col-sm modulo2 m1">
            <div>
                <h4 class="titulos">3.6 Enlaces o hipervínculos</h4>
                <p>
                    Es importante tener en cuenta la accesibilidad de los elementos al
                    poner enlaces o hipervínculos, para conseguirlo es importante tener
                    en cuenta si el texto del enlace tiene sentido al ser interpretado
                    por un lector de pantallas, en lo posible evitar los enlaces que
                    digan “Hacer click aquí”, ya que no proporcionan información
                    suficiente para el lector de pantalla
                </p>
                <h4 class="titulos">
                    3.7 Compatibilidad con lectores de pantalla
                </h4>
                <p>
                    Los lectores de pantalla (screen readers en inglés) son un software
                    que permite la utilización del sistema operativo y las distintas
                    aplicaciones mediante el empleo de un sintetizador de voz que "lee y
                    explica" lo que se visualiza en la pantalla, lo que supone una ayuda
                    para las personas con graves problemas de visión o completamente
                    ciegas.
                </p>
                <p>
                    Se describe la compatibilidad de Powerpoint y presentaciones de
                    Google con los lectores de pantalla disponibles para computadores y
                    dispositivos móviles.
                </p>
                <h5>
                    <b class="titulos">• </b> PowerPoint:
                </h5>
                <ul>
                    <li>
                        Windows: ha sido probado con narrador de Microsoft y JAWS, pero se
                        señala que es posible que funcione con otros lectores de pantalla
                        que sigan las normas de accesibilidad establecidas.
                    </li>
                    <li>
                        MacOS: puede ser empleado con VoiceOver, el lector de pantalla de
                        este sistema operativo.
                    </li>
                    <li>
                        iOS: al igual que macOS, la aplicación funciona con VoiceOver.
                    </li>
                    <li>
                        Android: se recomienda emplear TalkBack, que corresponde al lector
                        de pantalla integrado de este sistema operativo.
                    </li>
                    <li>
                        Android: se recomienda emplear TalkBack, que corresponde al lector
                        de pantalla integrado de este sistema operativo.
                    </li>
                    <li>
                        Aplicación web: ha sido probado con JAWS, pero no se descarta que
                        funcione con otras aplicaciones.
                    </li>
                </ul>
                <h5>
                    <b class="titulos">• </b> Presentaciones de Google:
                </h5>
                <ul>
                    <li>
                        Computadores: funciona con lectores de pantalla como ChromeVox,
                        NVDA, JAWS y VoiceOver.
                    </li>
                    <li>Android: se sugiere emplear TalkBack.</li>
                    <li>iPhone y iPad: se recomienda usar VoiceOve</li>
                </ul>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior">Anterior</button>

                <button class="buttonModSiguiente">Siguiente</button>

            </div>
        </div>
    </div>

</x-app-layout>
