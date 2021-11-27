<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use PDF;

class PDFController extends Controller
{

    public function index()
    {
        return view('pdfs');
    }

    public function lista_todos_usuarios()
    {
        $data = ([
            'usuarios' => Usuario::all()
        ]);
        $pdf = PDF::loadView('relatorios.lista-usuarios-pdf', $data);
        return $pdf->stream('lista_de_usuarios');
    }
}
