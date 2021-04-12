<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Comentarios;
use Illuminate\Support\Facades\Auth;

class RedSocialController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comentarios = DB::table('comentarios')
                        ->join('users','comentarios.id_usuario', "=", 'users.id')
                        ->select('comentarios.*', 'comentarios.id as id_comentario','users.*')
                        ->orderBy('comentarios.id','DESC')
                        ->get();

        return view('home/index')->with(['lstComentarios'=>$comentarios]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action =1; //action crear 

        $data = [
            'action' => $action,
            'comment' => ""
        ];
        return view('home.create')->with(['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tomo id del usuario logeado
        $id_user = Auth::user()->id;
        Comentarios::create([
            'id_usuario' => $id_user,
            'comentario' => $request->comentario 
        ]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action =2; //action editar 
        $comentario = Comentarios::find($id);

        $data = [
            'action' => $action,
            'comment' => $comentario
        ];

        return view('home.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comentario = Comentarios::find($id);
        $comentario->update([
            'comentario' => $request->comentario
        ]);

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
