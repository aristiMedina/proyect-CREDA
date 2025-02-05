<x-auth.auth-layout>
    <div class="container mx-auto bg-light text-dark col-lg-5 px-5 py-4 rounded">
        <h2 class="text-center fs-1 mb-4">Iniciar Sesión</h2>
        <form class="row g-3">

            <div class="col-md-6">
                <label for="sign-up-name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="sign-up-name" placeholder="Jose">
            </div>
            <div class="col-md-6">
                <label for="sign-up-last-name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="user-last-name" placeholder="Roberto">
            </div>
            <div class="col-md-6">
                <label for="sign-up-email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="sign-up-email" placeholder="Example@example.com">
            </div>
            <div class="col-md-6">
                <label for="sign-up-password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="sign-up-password" placeholder="Pass1234">
            </div>

            <div class="col-md-6">
                <label for="sign-up-departamento" class="form-label">Departamento</label>
                <select id="sign-up-departamento" class="form-select">
                    <option selected>Seleccione un departamento...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="sign-up-municipio" class="form-label">Municipio</label>
                <select id="sign-up-municipio" class="form-select">
                    <option selected>Seleccione un municipio...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-12">
                <label for="sign-up-institucion" class="form-label">Institución Educativa</label>
                <select id="sign-up-institucion" class="form-select">
                    <option selected>Seleccione una institución educativa...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-12 d-flex align-items-center justify-content-evenly gap-3">
                <label class="fs-4" for="sign-up-genero">Género</label>
                <div class="">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sign-up-genero" id="women"
                            value="women">
                        <label class="form-check-label" for="women">Mujer</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sign-up-genero" id="man"
                            value="men">
                        <label class="form-check-label" for="man">Hombre</label>
                    </div>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
    </div>
</x-auth.auth-layout>
