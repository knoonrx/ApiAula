<?php

namespace App\Http\Controllers;


use App\Models\Conteudo;
use Illuminate\Http\Request;

class ConteudoController extends Controller
{
    public function add(Request $request)
    {
        return Conteudo::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'horario' => $request->horario,
            'curso_id' => $request->curso_id,
            'periodo_id' => $request->periodo_id,
            'disciplina_id' => $request->disciplina_id,
        ]);
    }

    public function update(Request $request)
    {
        $conteudo = Conteudo::find($request->id);

        $conteudo->titulo = $request->titulo;
        $conteudo->descricao = $request->descricao;
        $conteudo->horario = $request->horario;
        $conteudo->curso_id = $request->curso_id;
        $conteudo->periodo_id = $request->periodo_id;
        $conteudo->disciplina_id = $request->disciplina_id;

        return $conteudo->save();
    }

    public function delete(Request $request)
    {
        $conteudo = Conteudo::find($request->id);

        return $conteudo->delete();
    }

    public function find($id = null)
    {
        return Conteudo::findOrFail($id);
    }

    public function findAll()
    {
        return Conteudo::all();
    }
}
