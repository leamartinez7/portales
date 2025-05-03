<x-layout>
    <x-slot:title>Registro</x-slot>

    <h1>Crear cuenta</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            La información ingresada contiene errores. Por favor, revise los campos e intente nuevamente.
        </div>
    @endif

    <form action="{{ route('auth.store') }}" method="post">
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

        <!-- Campo Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
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

        <!-- Confirmación de Contraseña -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input
                type="password" id="password_confirmation" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror"
                @error('password_confirmation')
                    aria-invalid="true"
                    aria-errormessage="error-password_confirmation"
                @enderror>

            @error('password_confirmation')
                <div id="error-password_confirmation" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</x-layout>
