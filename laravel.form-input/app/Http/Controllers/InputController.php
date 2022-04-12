<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        return view('input.index');
    }

    public function input(Request $request)
    {
        // валидация поля
        $request->validate(
            [
                'exampleInputText' => 'required|max:10',
            ]
        );

        // получение значений
        $exampleInputText = $request->exampleInputText;
        $exampleTextarea = $request->exampleTextarea;
        $exampleSelect = $request->exampleSelect;
        $exampleCheckbox1 = $request->exampleCheckbox1;
        $exampleCheckbox2 = $request->exampleCheckbox2;
        $exampleRadio = $request->exampleRadio;
        $exampleInputRange = $request->exampleInputRange;

        return view(
            'input.index',
            [
                'exampleInputText' => $exampleInputText,
                'exampleTextarea' => $exampleTextarea,
                'exampleSelect' => $exampleSelect,
                'exampleCheckbox1' => $exampleCheckbox1,
                'exampleCheckbox2' => $exampleCheckbox2,
                'exampleRadio' => $exampleRadio,
                'exampleInputRange' => $exampleInputRange,
            ]
        );
    }
}
