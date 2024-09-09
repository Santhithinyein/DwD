<?php

namespace App\Http\Controllers;

use App\Models\Monastery;
use Illuminate\Http\Request;

class MonasteryUserController extends Controller
{
    public function show() {
        // Paginate results with 10 monasteries per page
        $monasteries = Monastery::paginate(5);
        return view('monastery', compact('monasteries'));
    }

    public function celebrated() {
        // Paginate results where 'mStatus' is 1
        $monasteries = Monastery::where('mStatus', 1)->paginate(5);
        return view('monastery', compact('monasteries'));
    }

    public function uncelebrated() {
        // Paginate results where 'mStatus' is 0
        $monasteries = Monastery::where('mStatus', 0)->paginate(5);
        return view('monastery', compact('monasteries'));
    }

    public function search(Request $request) {
        // Paginate search results
        $monasteries = Monastery::where('monasteryName', 'LIKE', '%' . $request->search . '%')
                        ->orWhere('address', 'LIKE', '%' . $request->search . '%')
                        ->paginate(10);

        return view('monastery', compact('monasteries'));
    }

}
