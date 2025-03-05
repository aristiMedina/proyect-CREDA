<x-auth.auth-layout>
    <div class="container recuperar-container">
        <div class="Recuperar-container">
            <h1>Recuperar Contraseña</h1>
            <p class="pClass">
                <p>¿Recuerdas la contraseña?</p>
                <a class="link" href="{{ route('login') }}">
                Iniciar Sesión
                </a>
            </p>
            <p class="p-rec">
                Si tu correo está asociado a una cuenta, se te mandara un correo
                electrónico con un enlace para recuperar tu contraseña.
            </p>
            <form>
                <h5>Correo Electrónico</h5>
                <input type="email" class="form-control" name="email" placeholder = "Correo Electrónico"
                    required />
                <hr />
                <button class="buttonRecu" type="submit">
                    Recuperar Constraseña
                </button>
            </form>
        </div>
    </div>
</x-auth.auth-layout>
