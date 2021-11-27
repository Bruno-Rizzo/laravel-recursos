<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UsuarioController extends Controller
{

    public function index()
    {
        $data = ([
            'usuarios' => Usuario::latest()->paginate(5),
        ]);
        return view('usuarios.lista-usuarios',$data);
    }

    public function perfil()
    {
        $usuario = Usuario::find(session('lvrecursos')->id);
        return view('usuarios.perfil',compact('usuario'));
    }

    public function update_perfil(Request $request)
    {

        $usuario = Usuario::find(session('lvrecursos')->id);

        $request->validate([
            'senha' => 'min:6 | max:10 | confirmed',
        ]);

        $usuario->update([
            'senha' => Hash::make($request->senha)
        ]);

        Alert::toast('Senha Alterada!', 'success');
        return redirect()->route('usuarios.index');

    }


    public function create()
    {
        return view('usuarios.novo-usuario');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome'  => 'required | min:3',
            'email' => 'required | unique:usuarios,email',
            'sexo'  => 'required',
            'senha' => 'required | min:6 | max:10'
        ]);

        Usuario::create([
            'nome'  => $request->nome,
            'email' => $request->email,
            'sexo'  => $request->sexo,
            'senha' => Hash::make($request->senha)
        ]);

        Alert::toast('Usuário Criado!', 'success');
        return redirect()->route('usuarios.index');
    }


    public function edit(Usuario $usuario)
    {
        return view('usuarios.edita-usuario',compact('usuario'));
    }


    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nome'  => 'required | min:3',
            'email' => 'required | unique:usuarios,email,'.$usuario->id,
            'sexo'  => 'required',
        ]);

        $usuario->update([
            'nome'  => $request->nome,
            'email' => $request->email,
            'sexo'  => $request->sexo,
        ]);

        Alert::toast('Usuário Editado!', 'success');
        return redirect()->route('usuarios.index');

    }


    public function confirm($id)
    {
        alert()->error('Excluir Usuário','Deseja realmente excluir este usuário?')
        ->showConfirmButton('<a href="/usuario/delete/'.$id.'" style="text-decoration:none;color:#FFF">Excluir</a>', '#C72826')
        ->showCancelButton('Cancelar', '#3085d6')
        ->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        Usuario::find($id)->delete();
        Alert::toast('Usuário Excluído!', 'success');
        return redirect()->route('usuarios.index');
    }


}
