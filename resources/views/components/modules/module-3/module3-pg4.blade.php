<x-app-layout auth='{{ $isAuth }}'>

    <div class="col-sm-8 shadow-lg contendorMod mod3">
        <div class="col-sm modulo3 m1">
            <div>
                <h4 class="titulosMod3">Material complementario</h4>
                <p>
                    Universidad Complutense de Madrid: Manual Práctico para Hacer Textos
                    Accesibles para Estudiantes con Diversidad Funcional.
                </p>
                <p class="d-flex gap-3 align-items-center justify-content-center">
                    <b class="titulosMod3">Enlace</b>
                    <a href="https://cutt.ly/fTYHOxP" target="_blank" rel="noreferrer">https://cutt.ly/fTYHOxP</a>
                </p>
                <p>¿Cómo elaborar documentos accesibles en Word?</p>
                <p class="d-flex gap-3 align-items-center justify-content-center">
                    <b class="titulosMod3">Enlace</b>
                    <a href="https://cutt.ly/7TYHH9b" target="_blank" rel="noreferrer">https://cutt.ly/7TYHH9b</a>
                </p>
                <p>
                    Red Internacional conformada por Instituciones de Educación
                    Superior: Creación de documentos digitales accesibles con Word y
                    LibreOffice
                </p>
                <p class="d-flex gap-3 align-items-center justify-content-center">
                    <b class="titulosMod3">Enlace</b>
                    <a href="https://cutt.ly/iTYHZx4" target="_blank" rel="noreferrer">https://cutt.ly/iTYHZx4</a>
                </p>
            </div>

            <div class="twoButtons">

                <button class="buttonModAnterior"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-3', ['page'=>3]) }}">Anterior</a></button>

                <button class="buttonModSiguiente"><a class="link-light link-offset-2 link-underline-opacity-0 .d-print-inline-block py-3 px-4" href="{{ route('module-3', ['page'=>5]) }}">Siguiente</a></button>

            </div>
        </div>
    </div>

</x-app-layout>
