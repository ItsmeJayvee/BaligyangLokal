<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminDashboard(){
        return view('admin.dashboard');
    }

    public function showRiderDashboard(){
        if(Auth::user()->role == 2){
            return view('admin.rider');
        }else{
            return redirect()->back();
        }
    }

    public function showSellerDashboard(){
        if(Auth::user()->role == 2){
            return view('admin.seller');
        }else{
            return redirect()->back();
        }
    }
}
