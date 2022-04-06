<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PreguntaController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        // echo $request;
        // $texto = $request->texto;
        // $preguntas = Pregunta::where('etiqueta', 'LIKE','%'.$texto.'%')
                    // ->orWhere('titulo', 'LIKE','%'.$texto.'%')
                    // ->latest('id');
        $buscador=$request->get('buscador');
        $preguntas = Pregunta::where('etiqueta', 'like', '%'.$buscador.'%')->paginate(5);
        $preguntas = Pregunta::all();
        // $data = ['preguntas' =>$preguntas,];
        // return view('user.index', $data);
         return view('user.index', compact('preguntas', 'buscador'));
    }

    public function indexd(Request $request)
    {
        //
        // echo $request;
        // $texto = $request->texto;
        // $preguntas = Pregunta::where('etiqueta', 'LIKE','%'.$texto.'%')
                    // ->orWhere('titulo', 'LIKE','%'.$texto.'%')
                    // ->latest('id');
        $preguntas = Pregunta::all();
        // $data = ['preguntas' =>$preguntas,];
        // return view('user.index', $data);
         return view('user.mostrar', compact('preguntas'));
    }

    public function create(Request $request)
    {
        
        return view('user.crear');
    }

    public function store(Request $request)
    {
        //
        $preguntas = new Pregunta();

        $preguntas->titulo = $request->titulo;
        $preguntas->descripcion = $request->descripcion;
        $preguntas->imagen = $request->imagen;
        $preguntas->etiqueta = $request->etiqueta;

        $preguntas->save();

        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        //
        $pregunta = Pregunta::find($id);
        return view('user.editar', compact('pregunta'));
    }

    public function update(Request $request, $id)
    {
        //
        $preguntas = Pregunta::find($id);
        $preguntas->update($request->all());
        return redirect()->route('user.index');
    }

    public function destroy(Pregunta $pregunta)
    {
        //
        //eliminar
        $pregunta->delete();
        return redirect()->route('user.index');
    }
}
