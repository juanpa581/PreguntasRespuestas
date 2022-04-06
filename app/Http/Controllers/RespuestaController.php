<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;

class RespuestaController extends Controller
{
    //
    public function index()
    {
        //
        // $computadoras = Computadora::paginate(5);
        // return view('admin.index', compact('admin'));
        $respuestas = Respuesta::all();
        return view('user.indexr', compact('respuestas'));
    }

    public function create(Request $request)
    {
        
        return view('user.crearres');
    }

    public function store(Request $request)
    {
        //
        $respuestas = new Respuesta();

        $respuestas->respuesta = $request->respuesta;
        $respuestas->usuario = $request->usuario;
        // $respuestas->autor = $request->fkid;

        $respuestas->save();

        return redirect()->route('user.indexr');
    }

    public function edit($id)
    {
        //
        $respuesta = Respuesta::find($id);
        return view('user.editarres', compact('respuesta'));
    }

    public function update(Request $request, $id)
    {
        //
        $respuestas = Respuesta::find($id);
        $respuestas->update($request->all());
        return redirect()->route('user.indexr');
    }

    public function destroy(Respuesta $respuesta)
    {
        //
        //eliminar
        $respuesta->delete();
        return redirect()->route('user.indexr');
    }
}