<x-layout>
    <x-slot:title>Blog</x-slot>

    <h1>Blog</h1>

    @auth
        <a class="mb-3" href="{{ route('entradas.store') }}">Crear nueva entrada</a>
    @endauth

    @if($entradas->count())
        <div class="row">
            @foreach($entradas as $entrada)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($entrada->imagen)
                            <img src="{{ asset('storage/' . $entrada->imagen) }}" class="card-img-top" alt="Imagen de {{ $entrada->titulo }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $entrada->titulo }}</h5>
                            <p class="card-text">{{ Str::limit($entrada->contenido, 100) }}</p>
                            <a href="{{ route('entradas.show', $entrada) }}" class="btn btn-primary">Leer más</a>
                        </div>
                        <div class="card-footer text-muted">
                            Publicado el {{ $entrada->created_at->format('d/m/Y') }} por {{ $entrada->usuario->nombre ?? 'Anónimo' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $entradas->links() }}
    @else
        <p>No hay entradas disponibles en el blog.</p>
    @endif
</x-layout>
