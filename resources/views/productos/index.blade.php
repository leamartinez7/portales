<?PHP
/**
 * $productos es una colección de productos
 * @var \Illuminate\Database\Eloquent\Collection|App\Models\Producto[] $productos
 */
?>


<x-layout>

    <x-slot:title>Productos</x-slot>

    <h1 class="mb-4">Todos los productos</h1>
    @auth
        <p><a class="mb-3" href="{{ route('productos.crear') }}">Cargar nuevo producto</a></p>
    @endauth


    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($productos as $producto)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h2 class="h4 card-title">{{ $producto->nombre }}</h2>
                        <p class="card-text text-muted">{{ $producto->categoria }}</p>
                        <p class="card-text fw-bold text-success">${{ $producto->precio }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('productos.ver', ['id' => $producto->producto_id]) }}" class="btn btn-primary w-100">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>



