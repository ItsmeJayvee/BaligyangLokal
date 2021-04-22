<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserDashboard(){
        if(Auth::user()->role == 4){
            return view('user.dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function showUserOrder(){
        if(Auth::user()->role == 4){
            return view('user.order');
        }else{
            return redirect()->back();
        }
    }

    public function showUserAccount(){
        if(Auth::user()->role == 4){
            return view('user.account');
        }else{
            return redirect()->back();
        }
    }
}
