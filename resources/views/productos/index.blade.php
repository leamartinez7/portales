<?PHP
/**
 * $productos es una colección de productos
 * @var \Illuminate\Database\Eloquent\Collection|App\Models\Producto[] $productos
 */
?>


<x-layout>

    <x-slot:title>Productos</x-slot>

    <h1>Todos los productos</h1>

    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Material</th>
            <th>Dimensiones</th>
            <th>Peso</th>
            <th>Fecha de Lanzamiento</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->producto_id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->categoria }}</td>
                <td>${{ $producto->precio }}</td>
                <td>{{ $producto->material }}</td>
                <td>{{ $producto->dimensiones }}</td>
                <td>{{ $producto->peso }} kg</td>
                <td>{{ $producto->fecha_lanzamiento }}</td>
                <td>
                    <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" width="100">
                </td>
                <td><a href="{{ route('productos.ver', ['id' => $producto->producto_id]) }}" class="btn btn-primary">Ver</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


</x-layout>