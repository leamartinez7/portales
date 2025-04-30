<?PHP 
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>


<x-layout>

    <x-slot:title>Crear producto</x-slot>

    <h1>Crear nuevo producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">La información ingresada contiene errores, por favor, revise los campos e intente nuevamente.</div>
    @endif

    <form action="{{ route('productos.publicar') }}" method="post" enctype="multipart/form-data">
        
        @csrf

        <!-- Campo Nombre -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input 
                type="text" id="nombre" name="nombre" 
                class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre') }}"
                @error('nombre') 
                    aria-invalid="true" 
                    aria-errormessage="error-nombre" 
                @enderror>

            @error('nombre')
                <div id="error-nombre" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Descripción -->
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror">{{ old('descripcion') }}</textarea>

            @error('descripcion')
                <div id="error-descripcion" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Categoría -->
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" id="categoria" name="categoria" class="form-control @error('categoria') is-invalid @enderror" value="{{ old('categoria') }}">

            @error('categoria')
                <div id="error-categoria" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Precio -->
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" id="precio" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio') }}">

            @error('precio')
                <div id="error-precio" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Material -->
        <div class="mb-3">
            <label for="material" class="form-label">Material</label>
            <input type="text" id="material" name="material" class="form-control @error('material') is-invalid @enderror" value="{{ old('material') }}">

            @error('material')
                <div id="error-material" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Dimensiones -->
        <div class="mb-3">
            <label for="dimensiones" class="form-label">Dimensiones</label>
            <input type="text" id="dimensiones" name="dimensiones" class="form-control @error('dimensiones') is-invalid @enderror" value="{{ old('dimensiones') }}">

            @error('dimensiones')
                <div id="error-dimensiones" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Peso -->
        <div class="mb-3">
            <label for="peso" class="form-label">Peso</label>
            <input type="text" id="peso" name="peso" class="form-control @error('peso') is-invalid @enderror" value="{{ old('peso') }}">

            @error('peso')
                <div id="error-peso" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Fecha de Lanzamiento -->
        <div class="mb-3">
            <label for="fecha_lanzamiento" class="form-label">Fecha de Lanzamiento</label>
            <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento" class="form-control @error('fecha_lanzamiento') is-invalid @enderror" value="{{ old('fecha_lanzamiento') }}">

            @error('fecha_lanzamiento')
                <div id="error-fecha_lanzamiento" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Imagen (Opcional) -->
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen del Producto</label>
            <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror">

            @error('imagen')
                <div id="error-imagen" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>

</x-layout>
