<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;

class IndexController extends Controller
{
    public function showAllCategories(){
        $categories = Category::all();
        return view('layouts.index', compact('categories'));
    }
}