<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index(){
        return view("signin");
    }

    public function signinPost(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user(); // Get the authenticated user
        $id = $user->id; // Get the user's ID
        return view('cash', compact('user', 'id')); // Pass the user and id to the view
    } else {
        return redirect()->back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }
}



    

    // public function authenticate(Request $request){
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return redirect()->intended('dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }
}
