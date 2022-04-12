<?php

namespace App\Http\Controllers;

use App\Http\Requests\SquareRequest;

class SquareController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function calculate(SquareRequest $request)
    {
        $perimeter = $request->side * 4;

        return view(
            'index',
        [
            'perimeter' => $perimeter,
            'side'=> $request->side
        ]);
    }
}
