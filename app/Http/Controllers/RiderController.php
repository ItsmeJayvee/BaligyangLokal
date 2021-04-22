<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    public function showDashBoard(){
        if(Auth::user()->role == 3){
            return view('rider.dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function showDeliveries(){
        if(Auth::user()->role == 3){
            return view('rider.deliveries');
        }else{
            return redirect()->back();
        }
    }

    public function showSettings(){
        if(Auth::user()->role == 3){
            return view('rider.account');
        }else{
            return redirect()->back();
        }
    }
}