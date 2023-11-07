<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
</head>

<body>
    @vite('resources/css/registro.css')
    <div class="registro-form">
        <form method="POST" action="{{route('session')}}">
            <img src="/images/Captura_de_pantalla_2023-10-12_195342-removebg-preview.png" alt="" width="130"
                height="">
            @csrf
            <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
            @error('email')
                <small style="color: red">*{{ $message }}</small>
            @enderror
            <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
            @error('password')
                <small style="color: red">*{{ $message }}</small>
            @enderror
            <br>
            <input type="submit" value="Iniciar sesion">
        </form>
    </div>
</body>

</html>
