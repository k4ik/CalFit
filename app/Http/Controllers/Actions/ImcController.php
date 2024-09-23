<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index()
    {
        return view('actions.imc');
    }

    public function calculate_imc(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height') / 100;

        $imc = $weight / ($height * $height);

        return view('actions.imc', [
            'imc' => round($imc, 2),
            'weight' => $request->input('weight'),
            'height' => $request->input('height'),
        ]);
        
    }
}
