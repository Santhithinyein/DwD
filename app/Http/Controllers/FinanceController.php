<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        $finances = Finance::all();
        $totalAmount = $finances->sum('amount');
        return view('finances.index', compact('finances','totalAmount'));
    }

    public function create()
    {
        return view('finances.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'fmonastery' => 'required|string',
        ]);

        Finance::create($request->all());
        return redirect()->route('finances.index')->with('success', 'Department data created successfully.');
    }

    public function edit(Finance $finance)
    {
        return view('finances.edit', compact('finance'));
    }

    public function update(Request $request, Finance $finance)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'fmonastery' => 'required|string',
        ]);

        $finance->update($request->all());
        return redirect()->route('finances.index')->with('success', 'Department data updated successfully.');
    }

    public function destroy(Finance $finance)
    {
        $finance->delete();
        return redirect()->route('finances.index')->with('success', 'Department data successfully.');
    }
}
