<x-layout>

    <x-slot:title>Eliminar producto: {{ $producto->nombre }}</x-slot:title>

    <h1 class="mb-4">Eliminar producto: {{ $producto->nombre }}</h1>

    <p class="mb-3">
        ¿Desea eliminar el producto "{{ $producto->nombre }}" del catálogo? Esta acción es irreversible.
    </p>

    <form 
        action="{{route('productos.eliminar', ['id' => $producto->producto_id])}}"
        method="POST"
        class="mb-3"
        >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    
    </form>


</x-layout>