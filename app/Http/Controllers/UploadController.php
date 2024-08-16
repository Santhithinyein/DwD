<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(Request $request){
        $id=$request->id;
        $price=$request->price;
        $payment=$request->payment;
        return view("upload",compact('id','price','payment'));
    }

    public function details(Request $request)
    {

        // $payment = $request->input('payment');
        // $id = $request->input('id');
        // $price = $request->input('price');
        // dd(request()->all());
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust the validation rules as needed
        ]);
        
        // Handle the file upload
        if ($request->hasFile('image')) {

            // // Store the uploaded image and get its path
            // $path = $request->file('image')->store('uploads', 'public');

            $donate=Doner::create([
                'user_id'=>$request->id,
                'transaction_type_id'=>$request->payment,
                'receivePhoto'=>$request->file('image')->store('uploads', 'public'),
                'amount'=>$request->price,
            ]);
         
            
            // Redirect with success message
            return back()->with(['success'=> 'Your donation has been successfully recorded.']);
        }
    
        // If no image was uploaded, return an error message
        return back()->with(['error'=> 'Please select an image to upload.']);
    }
    
}
