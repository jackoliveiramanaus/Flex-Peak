<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aluno;

class AlunoController extends Controller
{
    public function index() {
        $aluno = aluno::all();
        $total = aluno::all()->count();
        return view('list-aluno', compact('aluno', 'total'));
    }

    public function create() {
        return view('include-aluno');
    }

    public function store(Request $request) {
        $aluno = new aluno;
        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->cep = $request->cep;
        $aluno->logradouro = $request->logradouro;
        $aluno->numero = $request->numero;
        $aluno->bairro = $request->bairro;
        $aluno->cidade = $request->cidade;
        $aluno->estado = $request->estado;
        $aluno->curso_id = $request->curso_id;
        $aluno->save();
        return redirect()->route('aluno.index')->with('message', 'Aluno cadastrado');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $aluno = aluno::findOrFail($id);
        return view('alter-aluno', compact('aluno'));
    }

    public function update(Request $request, $id) {
        $aluno = aluno::findOrFail($id); 
       $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->cep = $request->cep;
        $aluno->logradouro = $request->logradouro;
        $aluno->numero = $request->numero;
        $aluno->bairro = $request->bairro;
        $aluno->cidade = $request->cidade;
        $aluno->estado = $request->estado;
        $aluno->curso_id = $request->curso_id;
        $aluno->save();
        return redirect()->route('aluno.index')->with('message', 'Aluno Editado!');
    }

    public function destroy($id) {
        $aluno = aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('aluno.index')->with('message', 'Aluno excluído com sucesso!');
    }

}
