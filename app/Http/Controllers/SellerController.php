<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function showSellerDashboard(){
        return view('seller.dashboard');
    }

    public function showSellerItems(){
        if(Auth::user()->role == 2){
            return view('seller.items');
        }else{
            return redirect()->back();
        }
    }

    public function showSellerOrders(){
        if(Auth::user()->role == 2){
            return view('seller.orders');
        }else{
            return redirect()->back();
        }
    }

    public function showSellerPayments(){
        if(Auth::user()->role == 2){
            return view('seller.payments');
        }else{
            return redirect()->back();
        }
    }

    public function showAddItems()
    {
        $colors = DB::table('colors')->get();
        $categories = DB::table('categories')->get();
        $sizes = DB::table('sizes')->get();
        if(Auth::user()->role == 2){
            return view('seller.addItem', compact('colors','categories', 'sizes'));
        }else{
            return redirect()->back();
        }
    }
}