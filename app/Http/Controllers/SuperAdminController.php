<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('superadmin.index', compact('users'));
    }

    public function create()
    {
        $userTypes = UserType::all();
        return view('superadmin.create', compact('userTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'user_type_id' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_type_id' => $request->user_type_id,
        ]);

        return redirect()->route('superadmin')->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $userTypes = UserType::all();
        return view('superadmin.edit', compact('user', 'userTypes'));
    }

    // public function update(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users,email,' . $user->id,
    //         'user_type_id' => 'required',
    //     ]);

    //     $user->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->password ? bcrypt($request->password) : $user->password,
    //         'user_type_id' => $request->user_type_id,
    //     ]);

    //     return redirect()->route('superadmin')->with('success', 'User updated successfully.');
    // }
    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->user_type_id = $request->input('user_type_id');

    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    $user->save();

    return redirect()->route('superadmin')->with('success', 'Admin updated successfully');
}


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('superadmin')->with('success', 'Admin deleted successfully.');
    }
    

}
