<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contáctanos</h1>

    {{--@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif --}}
    <form action="recibe-formulario" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        @error('nombre')
             <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
        <br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}">
        @error('correo')
             <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50">{{ old('mensaje') }}</textarea>
        @error('mensaje')
             <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>