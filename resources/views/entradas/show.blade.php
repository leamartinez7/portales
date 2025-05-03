<x-layout :title="$entrada->titulo">
    <div class="entrada">
        <h1>{{ $entrada->titulo }}</h1>
        <p><strong>Publicado el:</strong> {{ $entrada->created_at->format('d/m/Y') }}</p>
        <div class="contenido">
            {!! nl2br(e($entrada->contenido)) !!}
        </div>

        @if ($entrada->imagen)
            <div class="imagen">
                <img src="{{ asset('storage/' . $entrada->imagen) }}" alt="Imagen de la entrada">
            </div>
        @endif
    </div>

    <a href="{{ route('entradas.index') }}">← Volver al listado</a>
</x-layout>
