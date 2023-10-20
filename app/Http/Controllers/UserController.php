<?php

namespace App\Http\Controllers;

use App\Http\Requests\GamesRequest;
use App\Http\Requests\UserRequest;
use App\Models\Categories;
use App\Models\Games;
use App\Models\Platforms;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function animation(){
        return view('animation.animacion');
    }
    public function index(){
        return view('index');
    }

    public function pagRegis(){
        $rol = Rol::all();
        return view('registro', compact('rol'));
    }

    public function registro(UserRequest $request){

        $user = User::create($request->all());

        return redirect()->route('Pagina|Principal.index')->with(
            'success' , '¡Te has registrado Exitosamente! 🎁😁'
        );

    }
    public function login(Request $request){

        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'required' => 'Este campo es requerido'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();


            return redirect()->route('juegos')->with('success' , 'Haz Iniciado sesion correctamente 🎁😁');
        }
        return back()->withErrors([
            'email' => 'Usuario o contraseña incorrecta',
            'password' => 'Usuario o contraseña incorrecta'
        ]);

    }

    public function regisGames(){
        $juegos = Games::all();
        $categories = Categories::all();
        $platforms = Platforms::all();
        return view('regisGames', compact('juegos','categories','platforms'));
    }

    public function store(GamesRequest $request){

        $foto = $request->file('cover');
        $nombreFoto = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('games/images/'), $nombreFoto);

        $juego = new Games();
        $juego->name =  $request->name;
        $juego->platforms_id = $request->platforms_id;
        $juego->cover = $nombreFoto;
        $juego->categories_id =$request->categories_id;
        $fecha_formateada = date('Y-m-d', strtotime($request->year));
        $juego->year = $fecha_formateada;
        $juego->descripcion = $request->descripcion;
        $juego->save();

        return redirect()->route('juegos')->with([
            'success' , 'Tu Juego se ha cargado Exitosamente. 😎👍'
        ]);

    }

    public function show(){
        $juegos = Games::all();
        return view('juegos',compact('juegos'));
    }

    public function infoGames($item){
        $juegos = Games::find($item);
        return view('infoGames',compact('juegos'));
    }

    public function destroy(Games $juegos){
        $juegos->delete();
        return redirect()->route('juegos')->with('success', 'El juego se eliminó correctamente 😎👍');
    }

    public function edit( $item){
        $juego = Games::find($item);
        $categories = Categories::all();
        $platforms = Platforms::all();
        return view('editar', compact('juego','categories','platforms'));
    }

    public function update(Request $request, $item){
        $juego = Games::find($item);

        if($request->hasfile('cover')){
        $foto = $request->file('cover');
        $nombreFoto = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('games/images/'), $nombreFoto);

        $juego->name =  $request->name;
        $juego->platforms_id = $request->platforms_id;
        $juego->cover = $nombreFoto;
        $juego->categories_id =$request->categories_id;
        $fecha_formateada = date('Y-m-d', strtotime($request->year));
        $juego->year = $fecha_formateada;
        $juego->descripcion = $request->descripcion;
        $juego->save();
        return redirect()->route('juegos');
        }
    }

}
