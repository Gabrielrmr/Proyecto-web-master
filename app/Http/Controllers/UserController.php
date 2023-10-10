<?php

namespace App\Http\Controllers;

use App\Http\Requests\GamesRequest;
use App\Models\Games;
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
    public function login(Request $request){

        $credential = $request->validate([
            'fullname' => 'required',
            'password' => 'required'
        ],
        [
            'required' => 'Este campo es requerido'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->route('')->with('success' , 'Haz Iniciado sesion correctamente');
        }
        return back()->withErrors([
            'fullname' => 'Usuario o contraseña incorrecta',
            'password' => 'Usuario o contraseña incorrecta'
        ]);

    }
    public function store(GamesRequest $request){

        $foto = $request->file('cover');
        $nombreFoto = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('/games/images'), $nombreFoto);

        $games = Games::create($request->all());
        $games->cover = $nombreFoto;

        return redirect()->route('Pagina|Principal.show')->with([
            'success' , 'Tu Juego se ha cargado Exitosamente'
        ]);

    }


}
