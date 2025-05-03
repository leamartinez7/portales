<x-layout>
    <x-slot name="header">
        <h1 class="h3">Detalle de {{ $usuario->nombre }}</h1>
    </x-slot>

    <div class="card mb-4">
        <div class="card-body">
            <h5>Datos Personales</h5>
            <p><strong>ID:</strong> {{ $usuario->usuario_id }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
            <p><strong>Rol:</strong> {{ ucfirst($usuario->role) }}</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">Compras Realizadas</div>
        <ul class="list-group list-group-flush">
            @forelse($usuario->compras as $compra)
                <li class="list-group-item">
                    Compra #{{ $compra->id }} — Total: ${{ number_format($compra->total, 2) }} — Fecha: {{ $compra->created_at->format('d/m/Y') }}
                </li>
            @empty
                <li class="list-group-item">Sin compras registradas.</li>
            @endforelse
        </ul>
    </div>

    <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">Volver al listado</a>
</x-layout>
