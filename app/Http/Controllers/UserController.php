<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::get();

        return view('user.index',compact('users'));
    }

    public function show(){
        $doners=Transaction::get();

        return view('doner.index',compact('doners'));
    }
}
