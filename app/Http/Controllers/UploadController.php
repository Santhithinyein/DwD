<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(Request $request){

        $id = $request->id;
        $price = $request->price;
        $payment = $request->payment;

    // dd($id, $request->all());

    return view("upload", compact('id', 'price', 'payment'));
    }

    public function details(Request $request)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Handle the file upload
    if ($request->hasFile('image')) {
        // Store the uploaded image and get its path
        $donate = Doner::create([
            'user_id' => $request->id,
            'transaction_type_id' => $request->payment,
            'receivePhoto' => $request->file('image')->store('uploads', 'public'),
            'amount' => $request->price,

        ]);


        // Redirect with success message
        return redirect()->route('home')->with('success', 'Your donation has been successfully recorded.');
    }

    // If no image was uploaded, return an error message
    return back()->with(['error' => 'Please select an image to upload.']);
}

}
