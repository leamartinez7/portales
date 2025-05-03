<x-layout>
    <x-slot name="header">
        <h1 class="h3">Usuarios Registrados</h1>
    </x-slot>

    <div class="card shadow-sm mt-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th class="text-center">Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $u)
                            <tr>
                                <td>{{ $u->usuario_id }}</td>
                                <td>{{ $u->nombre }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    <span class="badge bg-{{ $u->role === 'admin' ? 'danger' : 'secondary' }}">
                                        {{ ucfirst($u->role) }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.usuarios.show', $u->usuario_id) }}" class="btn btn-sm btn-info">
                                        Ver Detalle
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
