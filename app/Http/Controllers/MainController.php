<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Leader;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        //$items = Leader::all();
        $categories = Category::all();
        ///$myname = "ahmed";
        /// $value = 12000;
        $mycats = Category::where('id', 5)->first();
        //return $category;
        return view('home2', compact('categories', 'mycats'));
    }
}
