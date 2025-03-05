<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod1">
        <div class="col-sm modulo1 m1">
            <div>
                <h5 class="titulosMod1">DISCAPACIDAD AUDITIVA</h5>
                <p>
                    Esta discapacidad hace parte de las discapacidades sensoriales. Este
                    concepto esta abordado desde el enfoque audiológico, el cual se
                    situa desde los diferentes grados de pérdida auditiva, sus causas y
                    las ayudas técnicas que pueden ser proporcionadas; y desde el
                    enfoque sociocultural reconoce a la comunidad sorda como comunidad
                    lingüística, desde su configuración cultural e identidad, siendo
                    usuarias de la lengua de señas (LS) (Domínguez y Velasco, 2013)
                    (Ministerio de Educación Nacional, 2017).
                </p>
                <img class="diseñoTablaIMG graficoDiscapacidad" src="{{ asset('imagenes_mod1/graficoDiscapacidad.jpg')}}"
                    alt="Creación a partir de información de documento (Ministerio de Educación Nacional, 2017)" />
                <p>
                    Al momento de implementar tecnologías, las personas que tienen esta
                    discapacidad, por lo general, se encuentran con barreras en algunos
                    contenidos multimedia que contienen animaciones, videos, podcast,
                    todos estos que incluyan audio. De igual forma, para los usuarios
                    que no empleen una lengua oral, también encuentran barreras con los
                    contenidos escritos (Rivas-Costa et al., 2014) . A pesar de esto, en
                    la actualidad, las tecnologías están aportando en la inclusión de
                    este colectivo en la vida cotidiana, que desarrollen actividades que
                    hace algunos años no era posible, un claro ejemplo son las
                    aplicaciones que se enfocan en mejorar la accesibilidad de estos
                    usuarios (Espinoza, 2015).
                </p>
            </div>
            <div class="twoButtons">
                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-2 px-4" href="{{ route('module-1', ['page'=>5]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-2 px-4" href="{{ route('module-1', ['page'=>7]) }}">Siguiente</a></button>
            </div>
        </div>
    </div>

</x-app-layout>
