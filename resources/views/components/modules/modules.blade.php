<x-app-layout auth='{{ $isAuth }}'>

    <div class="row w-100 py-5 d-flex flex-row flex-wrap align-items-start justify-content-center gap-4">

        <div class="col-8">

            <div class="row-6 d-flex flex-wrap row-gap-4">
                <div class="col-4">
                    <x-module>
                        <a href="{{route('module-1', $page='1')}}">
                            <img class="img-fixed"
                            {{-- src="https://plus.unsplash.com/premium_photo-1677526779537-c376aa880775?q=80&w=1398&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" --}}
                            src={{ asset('iconos_modules/Introduccion.png') }}
                            alt="Introduccón"
                            >
                        </a>

                        <x-slot name="title">
                            Modulo 1
                        </x-slot>
                    </x-module>
                </div>

                <div class="col-4">
                    <x-module>
                        <a href="{{route('module-2', $page='1')}}">
                            <img class="img-fixed"
                            {{-- src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGF0b3N8ZW58MHx8MHx8fDA%3D" --}}
                            src="{{ asset('iconos_modules/Presentaciones.png') }}"
                            alt="Analisi">
                        </a>

                        <x-slot name="title">
                            Modulo 2
                        </x-slot>
                    </x-module>
                </div>

                <div class="col-4">
                    <x-module>
                        <a href="{{route('module-3')}}">
                            <img class="img-fixed"
                            {{-- src="https://plus.unsplash.com/premium_photo-1677402408071-232d1c3c3787?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" --}}
                            src="{{ asset('iconos_modules/Documentos.png') }}"
                            alt="Archivos">
                        </a>

                        <x-slot name="title">
                            Modulo 3
                        </x-slot>
                    </x-module>
                </div>

                <div class="col-4">
                    <x-module>
                        <a href="{{route('module-4')}}">
                            <img class="img-fixed"
                            {{-- src="https://images.unsplash.com/photo-1494232410401-ad00d5433cfa?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" --}}
                            src="{{ asset('iconos_modules/Video.png') }}"
                            alt="Reproducir">
                        </a>

                        <x-slot name="title">
                            Modulo 4
                        </x-slot>
                    </x-module>
                </div>

                <div class="col-4">
                    <x-module>
                        <a href="{{route('module-5')}}">
                            <img class="img-fixed"
                            {{-- src="https://images.unsplash.com/photo-1583198432859-635beb4e8600?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" --}}
                            src="{{ asset('iconos_modules/HerramientasGAIA.png') }}"
                            alt="">
                        </a>

                        <x-slot name="title">
                            Modulo 5
                        </x-slot>
                    </x-module>
                </div>
            </div>

        </div>

        <div class="col-3">

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item pt-3">
                    <p class="fs-4 fw-semibold">Tu progreso</p>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-module1" aria-expanded="false" aria-controls="collapse-module1">
                            Modulo 1: 100%
                        </button>
                    </h2>
                    <div id="collapse-module1" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#">Lección 1</a></li>
                                <li class="list-group-item"><a href="#">Lección ...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-module2" aria-expanded="false" aria-controls="collapse-module2">
                            Modulo 2: 100%
                        </button>
                    </h2>
                    <div id="collapse-module2" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#">Lección 1</a></li>
                                <li class="list-group-item"><a href="#">Lección ...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-module3" aria-expanded="false"
                            aria-controls="collapse-module3">
                            Modulo 3: 100%
                        </button>
                    </h2>
                    <div id="collapse-module3" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#">Lección 1</a></li>
                                <li class="list-group-item"><a href="#">Lección ...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-module4" aria-expanded="false"
                            aria-controls="collapse-module4">
                            Modulo 4: 100%
                        </button>
                    </h2>
                    <div id="collapse-module4" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#">Lección 1</a></li>
                                <li class="list-group-item"><a href="#">Lección ...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-module5" aria-expanded="false"
                            aria-controls="collapse-module5">
                            Modulo 5: 0%
                        </button>
                    </h2>
                    <div id="collapse-module5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#">Lección 1</a></li>
                                <li class="list-group-item"><a href="#">Lección ...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-app-layout>
