<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request){
        $id=$request->userId;
        $price=$request->donate_rate;
        return view("payment",compact('id','price'));
    }

    // public function uploadpay(Request $request){
    //     dd(request()->all());

    // }
}
