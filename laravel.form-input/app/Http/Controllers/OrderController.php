<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(){

        return view('order.index');
    }
    public function order(Request $request){

        return view('order.index');
    }
}
