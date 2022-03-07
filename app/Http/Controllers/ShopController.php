<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request){
        return view('index');
    }
    
    public function shop(Request $request){
        $activeProducts = Product::whereStatusId(1)->get();
        return view('shop', compact('activeProducts'));
    }

    public function details(Product $product){
        return view('single_product', compact('product'));
    }
}
