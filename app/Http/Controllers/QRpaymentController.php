<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRpaymentController extends Controller
{
    public function index(Request $request)
    {
      
        // use 'price' to match the hidden field name
        $payment = $request->input('payment');
        // dd($request->all());
        
        if ($payment === '1') {
            $id = $request->input('id');
            $price = $request->input('price'); 
            return view("kqrpayment", compact('id', 'price', 'payment'));
        } else {
            $id = $request->input('id');
            $price = $request->input('price'); 
            return view("qrpayment", compact('id', 'price', 'payment'));
        }
    }
}

