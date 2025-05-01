<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} - Iron & Wood Studio</title>
    
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Tuffy:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Proyecto</a> 

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <x-nav-link route="home">Home</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link route="productos.index">Productos</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link route="about">About Us</x-nav-link>
                    </li>
                    @auth
                    <li class="nav-item">
                        <form action="{{ url('cerrar-sesion') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link align-baseline"> {{ auth()->user()->email }}  (Cerrar sesión)</button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <x-nav-link route="auth.login">Iniciar sesión</x-nav-link>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="container p-4">
    @if(session()->has('feedback.message'))
        <div class="alert alert-{{ session()->get('feedback.type', 'success') }}">
            {!! session()->get('feedback.message') !!}</div>
    @endif
        {{ $slot }}
    </main>

    <footer class="bg-dark text-white text-center p-3">
        <p>Copyright &copy; Da Vinci 2024</p>
    </footer>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
