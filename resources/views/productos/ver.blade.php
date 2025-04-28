<?PHP

/**
 * Vista de detalle de un producto
 * @var \App\Models\Producto $producto Instancia del modelo Producto que contiene la información a mostrar.
 */

?>

<x-layout>

    <x-slot:title>{{ $producto->nombre }}</x-slot:title>

    <h1 class="mb-4">{{ $producto->nombre }}</h1>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="img-fluid rounded">
        </div>

        <div class="col-md-6 d-flex flex-column">
            <h2 class="h4 mb-3">Descripción del producto</h2>
            <p>{{ $producto->descripcion }}</p>

            <h3 class="h5 mt-4">Detalles</h3>
            <ul class="list-unstyled">
                <li><strong>Categoría:</strong> {{ $producto->categoria }}</li>
                <li><strong>Material:</strong> {{ $producto->material }}</li>
                <li><strong>Dimensiones:</strong> {{ $producto->dimensiones }}</li>
                <li><strong>Peso:</strong> {{ $producto->peso }} kg</li>
                <li><strong>Fecha de lanzamiento:</strong> {{ $producto->fecha_lanzamiento }}</li>
            </ul>

            <h3 class="h5 mt-4">Precio</h3>
            <p class="fs-4 fw-bold text-success">${{ $producto->precio }}</p>

            <div class="mt-auto">
                <button class="btn btn-primary btn-lg w-100 mt-3" disabled>Add to Cart</button>
            </div>
        </div>
    </div>

</x-layout>
