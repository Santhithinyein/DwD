<?php

namespace App\Http\Controllers;

use App\Models\Monastery;
use Illuminate\Http\Request;

class MonasteryController extends Controller
{
    public function index(Request $request)
    {
        $query = Monastery::query();

        if ($request->filled('search')) {
            $query->where('monasteryName', 'like', '%'.$request->input('search').'%');
        }

        if ($request->filled('address')) {
            $query->where('address', $request->input('address'));
        }

        $monasteries = $query->paginate(10);

        // Get all unique addresses for the dropdown
        $addresses = Monastery::pluck('address')->unique();

        return view('monastery.index', compact('monasteries', 'addresses'));
    }


    public function create(Request $request)
    {
       return view('monastery.create');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'monasteryName' => 'required|string',
            'monkName' => 'required|string',
            'address' => 'required|string',
            'phNo' => 'required|numeric',
            'building' => 'required|integer',
            'monkNo' => 'required|integer',
            'mStatus' => 'required|boolean',
            'photo' => 'required|string',
            
        ]);

        $data['mStatus'] = (bool)$request->input('mStatus');

        Monastery::create($data);

        return redirect()->route('monasteries.index');
    }

    public function edit(Monastery $monastery)
    {
        return view('monastery.edit', compact('monastery'));
    }

    public function update(Request $request, Monastery $monastery)
    {
        $data = $request->validate([
            'monasteryName' => 'required|string',
            'monkName' => 'required|string',
            'address' => 'required|string',
            'phNo' => 'required|numeric',
            'building' => 'required|integer',
            'monkNo' => 'required|integer',
            'mStatus' => 'required|boolean',
            'photo' => 'required|string',
        ]);

        $data['mStatus'] = (bool)$request->input('mStatus');

        $monastery->update($data);

        return redirect()->route('monasteries.index');
    }

    public function destroy(Monastery $monastery)
    {
        $monastery->delete();
        return redirect()->route('monasteries.index');
    }



}
