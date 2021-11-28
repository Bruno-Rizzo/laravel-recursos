<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Alert;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.lista-funcionarios', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.novo-funcionario');
    }

   public function store(Request $request)
    {
        $request->validate([
            'nome'   => 'required',
            'setor'  => 'required',
            'funcao' => 'required',
            'foto'   => 'required'
        ]);

        $path    = public_path('images');
        $imgName = date('dmYHis').'.'.$request->foto->extension();
        $foto    = $request->foto->move($path , $imgName);

        Funcionario::create([
            'nome'   => $request->nome,
            'setor'  => $request->setor,
            'funcao' => $request->funcao,
            'foto'   => $imgName
        ]);

        Alert::toast('Funcionário Criado!', 'success');
        return redirect()->route('funcionarios.index');

    }

    public function show(Funcionario $funcionario)
    {
        //
    }

    public function edit(Funcionario $funcionario)
    {
        //
    }

   public function update(Request $request, Funcionario $funcionario)
    {
        //
    }

    public function destroy(Funcionario $funcionario)
    {
        //
    }
}
