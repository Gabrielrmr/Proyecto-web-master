<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina | Principal</title>

</head>

<body>
    @vite('resources/css/app.css','resources/js/app.js')
    <header>
        <h1 class="logo">LOGO</h1>
        <nav class="login">
            <a href="">Iniciar Sesion</a>
            <a href="">Registrarse</a>
        </nav>
    </header>

    @yield('content')
</body>

</html>
