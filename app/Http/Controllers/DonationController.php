<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class DonationController extends Controller
{
    public function index(){
        return view("donation");
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cpswd' => 'required|same:password',
           
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encrypt the password before storing it
            'user_type_id'=>2,
        ]);
    
        // Redirect to a desired route with a success message
        return redirect()->route('signin');


        // return redirect()->route('signin'); 
    }

    

}
