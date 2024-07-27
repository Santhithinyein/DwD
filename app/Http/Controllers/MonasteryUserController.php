<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonasteryUserController extends Controller
{
    public function index(){
        return view("monastery");
    }
}
