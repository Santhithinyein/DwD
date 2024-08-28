<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Doner;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index(){
        $users=User::get();

        return view('user.index',compact('users'));
    }

    

   
    public function sendMail($id){
        
        $user=User::where('id',$id)->first();
        $doner=Doner::where('user_id',$id)->first();
        $amount=$doner->amount;
        
        // dd($user->amount);
       
        // dd($user->email);
        
        

        Mail::send('emails.myDemoMail',['data'=>$user,'amount'=>$amount],function($message) use($user){
            $message->to($user->email);
            $message->subject('Donation Receipt for your donation');
        });

        return redirect()->back()->with('success','Success');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

}
