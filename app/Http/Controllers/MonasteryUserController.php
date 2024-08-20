<?php

namespace App\Http\Controllers;

use App\Models\Monastery;
use Illuminate\Http\Request;

class MonasteryUserController extends Controller
{
    public function show(){
        $monasteries = Monastery::all();
        return view('monastery', compact('monasteries'));
    }

    public function celebrated(){
        // Use `where` with the correct column name and value
        $monasteries = Monastery::where('mStatus', 1)->get();
        return view('monastery', compact('monasteries'));
    }

    public function uncelebrated(){
        // Use `where` with the correct column name and value
        $monasteries = Monastery::where('mStatus', 0)->get();
        return view('monastery', compact('monasteries'));
    }

    public function search(Request $request) {
        $monasteries = Monastery::where('monasteryName', 'LIKE', '%' . $request->search . '%')->get();
        return view('monastery', compact('monasteries'));
    }

}
