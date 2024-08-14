<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $doners=User::get();
        return view('admin.index',compact('doners'));
    }
}
