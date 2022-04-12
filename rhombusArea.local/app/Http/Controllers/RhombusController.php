<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AreaRequest;

class RhombusController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function calculate(AreaRequest $request)
    {
        $area = $request->side * $request->height;

        return view(
            'index',
        [
            'area' => $area,
            'side'=> $request->side,
            'height'=> $request->height
        ]);
    }
}
