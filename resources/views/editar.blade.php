<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @vite('resources/css/editar.css')

    <div class="divEditar">
        <form action="{{route('update', $juego)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
       <img id="imgJuego" src="{{asset('games/images/'. $juego->cover)}}" alt="">
       <label id="txtCambiarImg" for="file">Cambiar Imagen:</label>
       <input type="file" name="cover" id="file">
       <!--<img for="file" src="imgEditar.png" id="btnCambiarImg">-->

       <label id="txtCategoria" for="slcCategorias">Categoria:</label><br>
       <select name="categories_id" id="slcCategorias">
        @foreach ($categories as $item)
            @if ($item->id == $juego->categories_id)
            <option value="{{ $item->id }}" selected> {{ $item->name }} </option>
            @else
            <option value="{{ $item->id }}"> {{ $item->name }} </option>
            @endif
        @endforeach
    </select>
       <label id="txtPlataforma" for="slcPlataforma">Plataforma:</label><br>
       <select name="platforms_id" id="slcPlataforma">
        @foreach ($platforms as $item)
            @if ($item->id == $juego->platforms_id)
            <option value="{{ $item->id }}" selected> {{ $item->name }} </option>
            @else
            <option value="{{ $item->id }}"> {{ $item->name }} </option>
            @endif
        @endforeach
    </select>
    <textarea name="descripcion" id="" cols="20" rows="5">{{$juego->descripcion}}</textarea>
       <h4 id="txtNombre">Nombre: </h4>
       <input id="iptNombre" name="name" value="{{$juego->name}}"  {{old('name')}} type="text">
       <h4 id="txtAño">Año de Lanzamiento: </h4>
       <input id="iptAño"  type="date" name="year" value="{{$juego->year}}">
       <button type="submit" id="btnEditar">Editar Juego</button>
    </div>
</form>
</body>
</html>
