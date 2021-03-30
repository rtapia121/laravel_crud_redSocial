<?php

namespace App\Http\Controllers;

use App\Comentarios;
use Illuminate\Http\Request;
use App\User;
use  DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
        return view('home/home');
        
    }

    // public function index(Request $request)
    // {
    //      $comentario = "aqui haciendo variables chidas en laravel";

    //     $valorReequest = $request->all(); // todos los datos 
    //     $nombre = $request->name;// tomas solo el campo de nombre del formulario que se envia
    //     User::create($request->all()); // se guarda en DB la info recibida en el request 


    //     //de esta manera se guarda la info en db formaa 1
    //     $oComentario = new Comentarios();
    //     $oComentario->id_usuario = $request->id_usuario;
    //     $oComentario->comentario = $request->comentario;
    //     $oComentario->save();

    //     //forma 2
    //     $oComentario1 = Comentarios::create([
    //         'id_usuario' => 20,
    //         'comentario' => "Creando  comentarios con eloquent"
    //     ]);


    //     //query builder
    //     // DB::table('comentarios')->insert(
    //     //     ['email' => 'john@example.com', 'votes' => 0]
    //     // );


    //     return view('home')->with(['comentario' => $comentario]);
    // }
}
