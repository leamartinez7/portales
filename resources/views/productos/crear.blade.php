<x-layout>

    <x-slot:title>Crear producto</x-slot>

    <h1>Crear nuevo producto</h1>

    <form action="{{ route('productos.publicar') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" id="categoria" name="categoria" class="form-control">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" id="precio" name="precio" class="form-control">
        </div>

        <div class="mb-3">
            <label for="material" class="form-label">Material</label>
            <input type="text" id="material" name="material" class="form-control">
        </div>

        <div class="mb-3">
            <label for="dimensiones" class="form-label">Dimensiones</label>
            <input type="text" id="dimensiones" name="dimensiones" class="form-control">
        </div>

        <div class="mb-3">
            <label for="peso" class="form-label">Peso</label>
            <input type="text" id="peso" name="peso" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fecha_lanzamiento" class="form-label">Fecha de Lanzamiento</label>
            <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento" class="form-control">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen del Producto <span class="small">(Opcional)</span></label>
            <input type="file" id="imagen" name="imagen" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>

</x-layout>