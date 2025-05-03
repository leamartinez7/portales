<x-layout>
    <x-slot:title>Editar Entrada</x-slot>

    <h1>Editar Entrada</h1>

    @if ($errors->any())
        <div class="alert alert-danger">Por favor, corrige los errores a continuación.</div>
    @endif

    <form action="{{ route('entradas.update', $entrada) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $entrada->titulo) }}">
            @error('titulo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea id="contenido" name="contenido" class="form-control @error('contenido') is-invalid @enderror" rows="5">{{ old('contenido', $entrada->contenido) }}</textarea>
            @error('contenido')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        @if($entrada->imagen)
            <div class="mb-3">
                <label class="form-label">Imagen Actual</label>
                <div>
                    <img src="{{ asset('storage/' . $entrada->imagen) }}" alt="Imagen de la entrada" width="200">
                </div>
            </div>
        @endif

        <div class="mb-3">
            <label for="imagen" class="form-label">Nueva Imagen</label>
            <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror">
            @error('imagen')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('entradas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</x-layout>
