<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curso;

class CursoController extends Controller
{
    public function index() {
        $curso = curso::all();
        $total = curso::all()->count();
        return view('list-curso', compact('curso', 'total'));
    }

    public function create() {
        return view('include-curso');
    }

    public function store(Request $request) {
        $curso = new curso;
        $curso->nome = $request->nome;
        $curso->professor_id = $request->professor_id;
        $curso->save();
        return redirect()->route('curso.index')->with('message', 'Curso cadastrado');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $curso = curso::findOrFail($id);
        return view('alter-curso', compact('curso'));
    }

    public function update(Request $request, $id) {
        $curso = curso::findOrFail($id); 
       $curso->nome = $request->nome;
       $curso->professor_id = $request->professor_id;
        $curso->save();
        return redirect()->route('curso.index')->with('message', 'Curso Editado!');
    }

    public function destroy($id) {
        $curso = curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('curso.index')->with('message', 'Curso excluído com sucesso!');
    }

}
