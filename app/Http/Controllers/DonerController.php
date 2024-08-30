<?php

namespace App\Http\Controllers;

use App\Exports\DonorsExport;
use App\Models\Doner;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DonerController extends Controller
{
    public function index(Request $request){
       
        // if (!is_null($request->search)) {
        //     $doners = Doner::whereHas('user', function ($query) use($request){
        //         $query->where('name', 'like', '%'.$request->search.'%'); // Replace 'john' with the username you are searching for
    
        //     })                
        //     ->get();

            
        // }elseif (isset($request->start_date)) {
        //     $start_date=$request->start_date;
        //     $end_date=$request->end_date;

        //     $doners = Doner::whereHas('user', function ($query) use($request,$start_date,$end_date){
        //         $query
                
        //         ->whereBetween('created_at', [Carbon::parse($start_date), Carbon::parse($end_date)])
        //         ->orWhereBetween('created_at', [Carbon::parse($start_date), Carbon::parse($end_date)]); // Replace 'john' with the username you are searching for
    
        //     })                
        //     ->get();
        // }
        // $doners=Doner::get();
    
    $doners = Doner::whereHas('user', function ($query) use($request){
        $query->where('name', 'like', '%'.$request->search.'%'); // Replace 'john' with the username you are searching for

    })
    ->orderBy('created_at', 'desc')
    ->paginate(10);
   
    
    
    return view('doner.index',compact('doners'));
}
    public function filter(Request $request){
        $start_date=$request->start_date;
        $end_date=$request->end_date;

            $doners=Doner::whereDate('created_at','>=',$start_date)
            ->whereDate('created_at','<=',$end_date)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            return view('doner.index',compact('doners'));
                
                

    }
    public function export() 
    {
        return Excel::download(new DonorsExport, 'donors.xlsx');
    }
}
