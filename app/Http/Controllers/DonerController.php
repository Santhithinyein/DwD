<?php

namespace App\Http\Controllers;

use App\Exports\DonorsExport;
use App\Models\Doner;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DonerController extends Controller
{
    public function index(Request $request)
{
    // Initialize query for Doner model
    $query = Doner::query();

    // Check if the "Filter" button was clicked
    if ($request->input('action') === 'filter') {
        // Apply Date Range Filter
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereDate('created_at','>=',$request->start_date)
                    ->whereDate('created_at','<=',$request->end_date);
           
        }
    }

    // Check if the "Search" button was clicked
    if ($request->input('action') === 'search') {
        // Apply Search Filter
        if ($request->filled('search')) {
            $query->whereHas('user', function ($userQuery) use ($request) {
                $userQuery->where('name', 'like', '%' . $request->search . '%');
            });
        }
    }

    // If both filters are set, apply both
    if ($request->filled('start_date') && $request->filled('end_date') && $request->filled('search')) {
        $query->whereDate('created_at','>=',$request->start_date)
              ->whereDate('created_at','<=',$request->end_date)
              ->whereHas('user', function ($userQuery) use ($request) {
                  $userQuery->where('name', 'like', '%' . $request->search . '%');
              });
    }

    // Fetch the filtered and paginated results
    $doners = $query->orderBy('created_at', 'desc')->paginate(10);
    
    // Retain filters in the pagination links
    $doners->appends($request->all());
    return view('doner.index', compact('doners'));
}

//     public function index(Request $request){
       
//     $doners = Doner::whereHas('user', function ($query) use($request){
//         $query->where('name', 'like', '%'.$request->search.'%'); // Replace 'john' with the username you are searching for

//     })
//     ->orderBy('created_at', 'desc')
//     ->paginate(10);
   
    
    
//     return view('doner.index',compact('doners'));
// }
    // public function filter(Request $request){
    //     $start_date=$request->start_date;
    //     $end_date=$request->end_date;

    //         $doners=Doner::whereDate('created_at','>=',$start_date)
    //         ->whereDate('created_at','<=',$end_date)
    //         ->orderBy('created_at', 'desc')
    //         ->paginate(10);
    //         return view('doner.index',compact('doners'));
                
                

    // }
    public function export() 
    {
        return Excel::download(new DonorsExport, 'donors.xlsx');
    }
}
