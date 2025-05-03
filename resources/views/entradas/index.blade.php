<x-layout>
    <x-slot:title>Entradas del Blog</x-slot>

    <h1>Entradas del Blog</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('entradas.create') }}" class="btn btn-primary mb-3">Nueva Entrada</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entradas as $entrada)
                <tr>
                    <td>{{ $entrada->titulo }}</td>
                    <td>{{ $entrada->usuario->nombre ?? 'N/A' }}</td>
                    <td>{{ $entrada->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('entradas.edit', $entrada) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('entradas.destroy', $entrada) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar esta entrada?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $entradas->links() }}
</x-layout>
