<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class LoginController extends Controller
{
   public function index()
   {
        return view('login');
   }

   public function login(Request $request)
   {

        $email = $request->email;
        $senha = $request->senha;

        $usuario = Usuario::where('email',$email)->first();

        if($usuario){
            if(Hash::check($senha, $usuario->senha)){
                session()->put('lvrecursos',$usuario);
                return redirect()->route('home');
            }else{
                return redirect()->back()->with('erro','Senha incorreta');
            }
        }else{
            return redirect()->back()->with('erro','Email não encontrado');
        }

   }

   public function logout()
   {
        session()->flush();
        return redirect()->route('login');
   }

}
