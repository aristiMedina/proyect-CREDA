<x-app-layout auth='{{ $isAuth }}'>

    <div class="contendorUsuarios">
        <table class="table table-md tabla-usuarios table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Progreso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->town }}</td>
                        <td>{{ $user->progress }}</td>
                        <td>
                            <div class="btn btn-danger">Eliminar</div>
                            <div class="btn btn-primary">Ver</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $users->links() }}
        </div>
    </div>

</x-app-layout>
