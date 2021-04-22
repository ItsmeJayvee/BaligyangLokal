<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function showAllMensApparel(){
        $categories = Category::all();

        $link = DB::table('categories')->where('link', 'mensapparel')->first();

        return view('products.items', compact('categories', 'link'));
    }

    public function showAllWomensApparel(){
        $categories = Category::all();
        
        $link = DB::table('categories')->where('link', 'womensapparel')->first();

        return view('products.items', compact('categories', 'link'));
    }

    public function showAllKitchen(){
        $categories = Category::all();
        
        $link = DB::table('categories')->where('link', 'kitchen')->first();

        return view('products.items', compact('categories', 'link'));
    }

    public function showAllElectronics(){
        $categories = Category::all();
        
        $link = DB::table('categories')->where('link', 'electronics')->first();
        
        return view('products.items', compact('categories', 'link'));
    }

    public function showAllToddlers(){
        $categories = Category::all();
        
        $link = DB::table('categories')->where('link', 'toddlers')->first();
        
        return view('products.items', compact('categories', 'link'));
    }

    public function showAllMensShoes(){
        $categories = Category::all();
        
        $link = DB::table('categories')->where('link', 'mensshoes')->first();
        
        return view('products.items', compact('categories', 'link'));
    }

    public function showAllWomensShoes(){
        $categories = Category::all();
        
        $link = DB::table('categories')->where('link', 'womensshoes')->first();
        
        return view('products.items', compact('categories', 'link'));
    }
}
