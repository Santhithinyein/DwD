<?php

namespace App\Http\Controllers;

use App\Models\Monastery;
use Illuminate\Http\Request;

class MonasteryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $monasteries = Monastery::query()
            ->when($search, function($query, $search) {
                return $query->where('monasteryName', 'LIKE', "%{$search}%");
            })
            ->get();

        return view('monastery.index', compact('monasteries', 'search'));
    }

    public function create()
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
            'mStatus' => 'required|boolean', // Ensure this validates as boolean
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
        'mStatus' => 'required|boolean', // Ensure this validates as boolean
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

