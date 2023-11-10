@extends('layouts/until')

@section('content')

@vite('resources/css/principal.css')

<section class="popular container">
    <h2> Juegos Populares</h2>
    <div class="popular-content">

        <ul>
            <li><img src="/images/mario.jpeg" alt=""> </li>
            <li><img src="/images/juegoMario.png" alt=""> </li>
            <li><img src="/images/Detective Pikachu™ Returns para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li><img src="/images/Mario Strikers™ Battle League para la consola Nintendo Switch™ – Sitio oficial.jpeg" alt=""></li>
            <li> <img src="/images/Super Mario RPG™ para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li><img src="/images/EA SPORTS FC™ 24 para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li> <img src="images/Pikmin 4 para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""> </li>
            <li> <img src="images/Pokémon™ Scarlet para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li> <img src="images/Bayonetta™ 3 – Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li>  <img src="images/Kirby’s Dream Buffet™ para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li> <img src="images/Xenoblade Chronicles™ 3 para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li> <img src="images/SONIC SUPERSTARS para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
            <li><img src="images/Pokémon™ Violet para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt=""></li>
          </ul>
    </div>
    <main class="product-container">
        <h2> Todos los juegos </h2>
        <div class="product-content">
            <div class="product-1">
                <img src="images/Super Mario RPG™ para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt="">
                <div class="product-txt">
                    <div class="price">
                        <h1>Super Mario</h1>
                        <p> Año : 1985</p>
                        <p> Categoria: Aventura</p>
                        <p> Descripcion: es un videojuego de plataformas,diseñado por Shigeru Miyamoto,  lanzado el
                            13 de septiembre
                            de 1985 y producido por la empresa
                            japonesa Nintendo, para la consola Nintendo
                            Entertainment System.
                        </p>
                    </div>
                </div>
            </div>
            <div class="product-1">
                <img src="/images/Xenoblade Chronicles™ 3 para Nintendo Switch - Sitio oficial de Nintendo.jpeg"alt="">

                <div class="price">
                    <h1>Xenoblade Chronicles</h1>
                    <p> Año : 2009</p>
                    <p> Categoria: Accion</p>
                    <p> Descripcion: Xenoblade Chronicles tiene un sistema de acción basado
                         en la batalla donde los ataques normales pasarán automáticamente
                          a intervalos, similar al establecido en Final Fantasy XII. Sin embargo, 
                          los ataques especiales de recarga están por separado
                         de ese intervalo a través de una "paleta de batalla" en la parte inferior
                          de la pantalla, parecido al de la saga Dragon Age.
                    </p>
                </div>
            </div>
            <div class="product-1">
                <img src="images/Bayonetta™ 3 – Sitio oficial de Nintendo.jpeg" alt="">

                <div class="price">
                    <h1>Bayonetta™ 3</h1>
                    <p> Año : 2022</p>
                    <p> Categoria: Accion- Aventura</p>
                    <p> Descripcion: El juego sigue a la bruja 
                        cazadora de ángeles titular Bayonetta,
                        que debe enfrentarse a armas biológicas hechas 
                        por el hombre llamadas homúnculos, y una entidad conocida como 
                        la Singularidad que amenaza con destruir el multiverso.
                    </p>
                </div>
            </div>
            <div class="product-1">
                <img src="images/Kirby’s Dream Buffet™ para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt="">

                <div class="price">
                    <h1>Kirby’s Dream Buffet</h1>
                    <p> Año : 2022</p>
                    <p> Categoria: Aventura</p>
                    <p> Descripcion: Compite en carreras 
                        a través de apetecibles pistas con obstáculos para obtener
                        fresas que harán que Kirby crezca. Participa en un minijuego 
                        entre las carreras y después enfréntate en la ronda final,
                        una contienda de frutas sobre una plataforma flotante.
                    </p>
                </div>
            </div>
            <div class="product-1">
                <img src="images/Pokémon™ Scarlet para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt="">

                <div class="price">
                    <h1>Pokémon™ </h1>
                    <p> Año : 2022</p>
                    <p> Categoria: rol - imaginacion
                    <p>Explora un mundo completamente abierto a tu propio paso y 
                        recorre a través de la tierra, el agua y el aire
                         a lomos del Pokémon legendario Koraidon,
                        que puede cambiar de forma en Pokémon Scarlet,  o sobre el Pokémon legendario Miraidon, 
                        que puede cambiar de forma en Pokémon Violet.
                    </p>
                </div>
            </div>
            <div class="product-1">
                <img src="images/Detective Pikachu™ Returns para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt="">

                <div class="price">
                    <h1>Detective - pikachu</h1>
                    <p> Año : 2016</p>
                    <p> Categoria: Accion- Aventura-fantasia</p>
                    <p> Descripcion: El Detective Pikachu es un juego de aventura 
                        en el que los jugadores controlan a Tim Goodman 
                        mientras trabaja junto con el detective Pikachu 
                        para resolver varios misterios. Esto se 
                        logra caminando por escenas, buscando pistas potenciales 
                        y hablando con personas y Pokémon para descubrir nueva información.
                    </p>
                </div>
            </div>

            <div class="product-1">
                <img src="images/Mario Strikers™ Battle League para la consola Nintendo Switch™ – Sitio oficial.jpeg" alt="">

                <div class="price">
                    <h1>Mario Strikers</h1>
                    <p> Año : 2005-2006</p>
                    <p> Categoria: Aventura</p>
                    <p> Descripcion: Strikers es un juego de deportes 
                        que incluye varios de los elementos representativos de la serie de Mario. 
                        El juego presenta los aspectos y objetivos básicos de un título basado en el fútbol, 
                        puesto que el juego no presenta 
                        árbitros y los personajes pueden golpear y atacar a sus 
                        contrincantes de una manera legítima con el fin de quitarles el balón.
                    </p>
                </div>
            </div>
            <div class="product-1">
                <img src="images/EA SPORTS FC™ 24 para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt="">

                <div class="price">
                    <h1>EA SPORTS FC™ 24</h1>
                    <p> Año : 2023</p>
                    <p> Categoria: Futbol Diversion</p>
                    <p> Descripcion: podrás compartir club con tus amistados 
                        a través del Cross-Play en plataformas de la misma generación. 
                        Esto también da lugar a marcadores unificados para que las personas 
                        que juegan en distintas consolas puedan competir entre sí por posiciones globales.
                    </p>
                </div>
            </div>
            <div class="product-1">
                <img src="images/Pikmin 4 para Nintendo Switch - Sitio oficial de Nintendo.jpeg" alt="">

                <div class="price">
                    <h1>Pikmin 4</h1>
                    <p> Año : 2023</p>
                    <p> Categoria: Aventura y Estrategia</p>
                    <p> Descripcion: Pikmin 4 es un juego de aventura y estrategia 
                        en tiempo real para Nintendo Switch que, 
                        continuando con la exitosa saga Pikmin, presenta una propuesta divertida, 
                        sencilla y encantadora con desafíos de todo tipo desarrollada por la Gran N.
                    </p>
                </div>
            </div>
    </main>
</section>


<footer class="footer container">

    <div class="link">
        <h1> Siguenos </h1>
        <img src="imagenes/redes.jpg 1_preview_rev_1.png" alt="">
    </div>

    </div>

</footer>
@endsection
