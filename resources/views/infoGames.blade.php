@extends('layouts.until')

@section('content')
    @vite('resources/css/style.css')

    <h1>Lista de Juegos</h1>
    <div class="cartaJuegos">
        <div class="card">
            <img id="imgJuego" src="{{ asset('games/images/' . $juegos->cover) }}">
            <h3>{{ $juegos->name }}</h3>
            <div class="info">
                <div class="platform">
                    <p>{{ $juegos->year }}</p>
                    <p style="color: red">{{ $juegos->categories['name'] }}</p>
                </div>
                <p>{{ $juegos->platforms->name }}</p>
            </div>
            <div id="flex">
                <a href=""><img id="imgBorrar" src="/images/imgBorrar.png"></a>
                <a href=""><img id="imgEditar" src="/images/imgEditar.png"></a>
            </div>
        </div>
        <section id="mdDescripcion">
            <h3>{{ $juegos->name }}</h3>
            <p>{{ $juegos->descripcion }}</p>
        </section>
    </div>
@endsection
