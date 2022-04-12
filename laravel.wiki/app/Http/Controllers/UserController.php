<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function show($id){
        return view(
            'show',
            ['id' => $id]
        );
    }
    public function create(Request $request){
        dd($request->name);
        return view('create');
    }
}
