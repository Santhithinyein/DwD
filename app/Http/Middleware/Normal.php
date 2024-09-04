<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Normal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $userRole=Auth::user()->user_type_id;

        if($userRole==2){
            return $next($request);
        }
        
        if($userRole==3){
            return redirect()->route('admin');
        }

        
        if($userRole==1){
            return redirect()->route('superadmin');
        }

        if($userRole==5){
            return redirect()->route('admin');
        }

        if($userRole==6){
            return redirect()->route('admin');
        }
    }
}