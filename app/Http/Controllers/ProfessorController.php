<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professor;

class ProfessorController extends Controller
{
    public function index() {
        $professor = professor::all();
        $total = professor::all()->count();
        return view('list-professor', compact('professor', 'total'));
    }

    public function create() {
        return view('include-professor');
    }

    public function store(Request $request) {
        $professor = new professor;
        $professor->nome = $request->nome;
        $professor->data_nascimento = $request->data_nascimento;
        $professor->save();
        return redirect()->route('professor.index')->with('message', 'Professor cadastrado');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $professor = professor::findOrFail($id);
        return view('alter-professor', compact('professor'));
    }

    public function update(Request $request, $id) {
        $professor = professor::findOrFail($id); 
       $professor->nome = $request->nome;
        $professor->data_nascimento = $request->data_nascimento;
        $professor->save();
        return redirect()->route('professor.index')->with('message', 'Professor Editado!');
    }

    public function destroy($id) {
        $professor = professor::findOrFail($id);
        $professor->delete();
        return redirect()->route('professor.index')->with('message', 'Professor excluído com sucesso!');
    }

}
