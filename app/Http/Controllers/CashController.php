<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashController extends Controller
{
    public function index(Request $request)
    {
        // dd(request()->all());
        $id=$request->userId;
        return view('cash', compact('id'));
    }
    public function val(Request $request){
        $price = $request->input('donate_rate');
        $id=$request->input('userId');
        // dd(request()->all());
        return view('payment',compact('price', 'id'));
    }
    
}

