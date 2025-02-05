<x-auth.auth-layout>

        <div class="container mx-auto bg-light text-dark col-lg-5 p-5 rounded">
            <h2 class="text-center fs-1 mb-4">Iniciar Sesión</h2>
            <form action="{{ route('init') }}" method="POST">
            {{-- <form> --}}
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@example.com">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Pass123">
                </div>

                <div class="d-grid gap-0">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    {{-- <a href="{{ route('init') }}" class="btn btn-primary">Iniciar Sesión</a> --}}
                    <hr>
                    <a href="{{ route('sign-up') }}" class="btn btn-primary">Registrar Usuario</a>
                </div>
            </form>
        </div>

</x-auth.auth-layout>
