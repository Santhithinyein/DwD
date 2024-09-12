<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // $doners=User::get();
        $user=auth()->user();
        $doners = Doner::orderBy('created_at', 'asc')->get();

        $total=0;
        foreach ($doners as $doner) {
            $total+=$doner->amount;
        }

        $donersCount = Doner::distinct('user_id')->count('id');

        $topDonor = Doner::orderBy('amount', 'desc')->first();

        $recentDoners = Doner::orderBy('created_at', 'desc')->take(5)->get();
        
        return view('admin.index',compact('doners','donersCount','total','recentDoners','user','topDonor'));
    }
}
