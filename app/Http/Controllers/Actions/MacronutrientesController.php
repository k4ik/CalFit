<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MacronutrientesController extends Controller
{
    public function index()
    {
        return view('actions.macronutrientes');
    }

    public function calculate_macronutrientes(Request $request)
    {
        $get = $request->input('get');
        $diet_type = $request->input('diet_type');
        $cal = 0;

        switch($diet_type){
            case 'deficit':
                $cal = $get - 500;
                break;
            case 'superavit': 
                $cal = $get + 500;
                break;
            case 'manutencao':
                $cal = $get;
                break;
        }

        $carboidratos = ($cal * 0.50) / 4;
        $proteinas = ($cal * 0.30) / 4;
        $gorduras = ($cal * 0.20) / 9;

        return view('actions.macronutrientes', [
            'macros' => [
                'carboidratos' => round($carboidratos),
                'proteinas' => round($proteinas),
                'gorduras' => round($gorduras)
            ]
        ]);
    }
}
