<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Charts\MonthlyUsersChart;

class HomeController extends Controller
{
    public function index(MonthlyUsersChart $chart)
    {
        $data = ([
            'usuarios' => Usuario::all()->count(),
            'chart' => $chart->build()
        ]);
        return view('home',$data);
    }
}
