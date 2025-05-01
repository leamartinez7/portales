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
        <a class="mb-3" href="{{ route('productos.crear') }}">Cargar nuevo producto</a>
    @endauth

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        @foreach($productos as $producto)
        <a href="{{ route('productos.ver', ['id' => $producto->producto_id]) }}" class="text-decoration-none text-reset">
        <div class="col">
                <div class="h-100 d-flex flex-column">
                    <!-- Imagen -->
                    <img src="{{ Storage::url($producto->imagen) }}" 
                        alt="{{ $producto->nombre }}" 
                        class="img-fluid w-100" 
                        style="aspect-ratio: 1 / 1.1; object-fit: contain; border-radius: 0;">

                    <!-- Información -->
                    <div class="mt-2">
                        <h2 class="h6 m-0">{{ $producto->nombre }}</h2>
                        <p class="fw-bold m-0">${{ number_format($producto->precio, 0, ',', '.') }}</p>
                        <p class="text-muted small">
                            ${{ number_format($producto->precio * 0.75, 0, ',', '.') }} con Transferencia o depósito bancario
                        </p>
                    </div>
                </div>
            </div>
        </a>

        @endforeach
    </div>


</x-layout>




