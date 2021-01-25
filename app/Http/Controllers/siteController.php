<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function gallery(){
        $products = Product::all();
        return view('site.products', compact('products'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('site.product', compact('product'));
    }
}
