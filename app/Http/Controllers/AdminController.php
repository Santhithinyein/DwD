<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // $doners=User::get();
        $doners=Doner::all();
        $total=0;
        foreach ($doners as $doner) {
            $total+=$doner->amount;
        }

        $donersCount=$doners->count();
        $recentDoner = Doner::orderBy('created_at', 'desc')->first();
        
        return view('admin.index',compact('doners','donersCount','total','recentDoner'));
    }
}
