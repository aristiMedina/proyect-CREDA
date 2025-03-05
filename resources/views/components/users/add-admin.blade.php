<x-app-layout auth='{{ $isAuth }}' admin='{{ $isAdmin }}'>

    @if ($isAdmin)
        <div class="invitar-container mt-5">
            <div class="invitar-text-container">
                <h1>Invitar Administrador</h1>
                <form onSubmit={handleInvitar}>
                    <h5>Correo Electrónico Destino</h5>
                    <input type="text" class="form-control mb-4" name="email" autoComplete="true"
                        placeholder = "Correo Electrónico Destino" required />
                    <h5>Descripción</h5>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" autoComplete="true"
                        placeholder = "Descripción"></textarea>
                    <button class="buttonInv" type="submit">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    @else
        <h1>No eres administrador</h1>
    @endif

</x-app-layout>
