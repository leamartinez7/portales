<?php 
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>


<x-layout>

    <x-slot:title>Login</x-slot>

    <h1>Iniciar sesión</h1>

    @if ($errors->any())
        <div class="alert alert-danger">La información ingresada contiene errores. Por favor, revise los campos e intente nuevamente.</div>
    @endif

    <form action="{{ route('auth.authenticate') }}" method="post">
        @csrf

        <!-- Campo Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" id="email" name="email" 
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}"
                @error('email') 
                    aria-invalid="true" 
                    aria-errormessage="error-email" 
                @enderror>

            @error('email')
                <div id="error-email" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Contraseña -->
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input 
                type="password" id="password" name="password" 
                class="form-control @error('password') is-invalid @enderror"
                @error('password') 
                    aria-invalid="true" 
                    aria-errormessage="error-password" 
                @enderror>

            @error('password')
                <div id="error-password" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</x-layout>