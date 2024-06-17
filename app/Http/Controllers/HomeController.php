<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $cats = Category::all();
        $products = Product::where('accepted', true)->get();
        return view('home', compact('cats', 'products'));
    }
}
