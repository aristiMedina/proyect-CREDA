<nav {{ $attributes->merge(['class'=>'navbar fixed-top navbar-expand-lg '. $class ]) }}>
    <div class="container-fluid">
        <a class="navbar-brand col-lg-1" href="#">
            {{ $logo ?? 'CREDA' }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul {{ $attributes->merge(['class'=>'navbar-nav me-auto mb-2 mb-lg-0 col-lg-7 '. $display ]) }}>

                @if ($isAdmin)

                    <li class="nav-item">
                        <a class="nav-link" href="#">Gestionar Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Invitar administrador</a>
                    </li>

                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('get-init') }}">Inicio</a>
                    </li>

                @endif

            </ul>

            <div class="col-lg-auto">

                <div class="row d-flex flex-row flex-nowrap align-items-center justify-content-center pe-5">
                    @if ($isAuth)

                        @if ($isAdmin)

                            <div class="col-lg-auto text-end order-1 border-end">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                </span>
                            </div>

                            {{-- <div class="col-lg-9 text-start order-2">
                                <a class="text-body-name fs-5">{{ $userName ?? 'Jose roberto'}}</a>
                            </div> --}}
                        @else

                            <div class="col-lg-auto text-end order-1 border-end">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                </span>
                            </div>

                            <div class="col-lg-9 text-start order-2">
                                <a class="text-body-name fs-5">{{ $userName ?? 'Jose roberto'}}</a>
                            </div>

                        @endif

                    @else

                        <div class="col-lg-auto text-end order-1 border-end">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
                            </span>
                        </div>

                        <div class="col-lg-9 text-start order-2">
                            <a href="{{ route('login') }}" class="text-body-black">Iniciar Sesión</a>
                        </div>

                    @endif
                </div>

            </div>
        </div>
    </div>
</nav>

