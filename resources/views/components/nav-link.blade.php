<?PHP
/**
 * Componente de enlace de navegación.
 *
 * @var string $route El nombre de la ruta a la que apunta el enlace.
 */
?>


<a class="nav-link {{ request()->routeIs($route) ? 'active' : '' }}" 
{!! request()->routeIs($route) ? 'aria-current="page"' : '' !!} 
href="{{ route($route) }}"
>{{ $slot }}</a>