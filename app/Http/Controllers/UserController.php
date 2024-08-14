<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){
        $users=User::get();

        return view('user.index',compact('users'));
    }

    public function show(){
        $doners=Transaction::get();

        return view('doner.index',compact('doners'));
    }

   
    public function sendMail($id){
        
        $user=User::where('id',$id)->first();
       
        // dd($user->email);
        

        Mail::send('emails.myDemoMail',['data'=>'You can donate in our event'],function($message) use($user){
            $message->to($user->email);
            $message->subject('Notification for our donation');
        });

        return redirect()->back()->with('success','Success');
    }

}
