<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @vite('resources/css/registro.css')
    <div class="registro-form">
        <form method="POST" action="">
            <img src="/images/Captura_de_pantalla_2023-10-12_195342-removebg-preview.png" alt="" width="130"
                height="">
            @csrf
            <input type="text" name="fullname" placeholder="nombre" value="{{ old('fullname') }}">
            @error('fullname')
                <small style="color: red">*{{ $message }}</small>
            @enderror
            <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
            @error('email')
                <small style="color: red">*{{ $message }}</small>
            @enderror
            <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
            @error('password')
                <small style="color: red">*{{ $message }}</small>
            @enderror
            <select name="rol_id" id="">
                <option value="" selected hidden>Seleccione su rol</option>
                @foreach ($rol as $item)
                    <option value="{{ $item->id }}" {{ old('rol_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
            @error('rol_id')
                <small style="color: red">*{{ $message }}</small>
            @enderror <br>
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>

</html>
