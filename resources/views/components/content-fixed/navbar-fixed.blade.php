{{-- <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand col-lg-1" href="#">
            {{ $logo ?? 'CREDA' }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-7">

                <li class="nav-item">
                    <a class="nav-link" href="#">{{ $inicio ?? 'disable' }}</a>
                </li>

            </ul>

            <div class="col-lg-auto">

                <div class="row d-flex flex-row flex-nowrap align-items-center justify-content-center pe-5">
                    @if ($isAuth)
                        <div class="col-lg-auto text-end order-1 border-end">
                            <p>Auth</p>
                        </div>
                        <div class="col-lg-9 bg-light text-start order-2">
                            <p>Auth x2</p>
                        </div>

                    @else

                        <div class="col-lg-auto text-end order-1 border-end">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
                            </span>
                        </div>
                        <div class="col-lg-9 bg-light text-start order-2">
                            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-body-black">Iniciar Sesión</a>
                        </div>

                    @endif
                </div>

            </div>
        </div>
    </div>
</nav> --}}
