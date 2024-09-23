<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function index()
    {
        return view('actions.get');
    }

    public function calculate_get(Request $request)
    {
        $gender = $request->input('gender');
        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');
        $activity = $request->input('activity');

        $tmb = 0;
        switch($gender) {
            case 'men':
                $tmb = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
                break;
            case 'female':
                $tmb = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
                break;
        }

        switch($activity) {
            case 'sedentary':
                $get = $tmb * 1.2;
                break;
            case 'lightly_active':
                $get = $tmb * 1.375;
                break;
            case 'moderately_active':
                $get = $tmb * 1.55;
                break;
            case 'very_active':
                $get = $tmb * 1.725;
                break;
            case 'extremely_active':
                $get = $tmb * 1.9;
                break;
        }

        return view('actions.get', [
            'get' => round($get, 0)
        ]);
    }
}
