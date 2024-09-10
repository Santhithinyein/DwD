<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class DonationController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->status; // Use query() to get query parameters
        // dd($status); // Debugging output
        if ($status === '1') {
            return back()->with('success', 'This Monastery had donation.Thanks, for your donation.');
        }
    
        return view('donation');
    
    }
    


    public function store(Request $request){
        // Validate the input fields
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email', // Check if the email already exists
        'password' => 'required|min:6',
        'cpswd' => 'required|same:password', // Ensure the password confirmation matches
    ], [
        'email.unique' => 'This email is already registered. Please use another email.', // Custom message
        'cpswd.same' => 'Password confirmation does not match.', // Custom message for password confirmation
    ]);

    // Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password), // Encrypt the password before storing
        'user_type_id' => 2, // Assign user type
    ]);

    // Redirect to the signin route with success message
    return redirect()->route('signin')->with('success', 'Account created successfully! Please sign in.');
    

}
}