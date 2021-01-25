<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['products'] = Product::orderBy('id', 'desc');
        $products = Product::all();
        return view('productList', compact('products'));
    }

    public function gallery(){
        $products = Product::all();
        return view('site.products', compact('products'));
    }

    /**
     * Gallery sort functions
     */

    public function gallerySorted(){
        $products = Product::all()->sortBy('name');   
        return view('site.products', compact('products'));
    }

    public function gallerySortedreverse(){
        $products = Product::all()->sortBy('name')->reverse();   
        return view('site.products', compact('products'));
    }

    public function galleryPriceSorted(){
        $products = Product::all()->sortBy('price');   
        return view('site.products', compact('products'));
    }

    public function galleryPriceSortedreverse(){
        $products = Product::all()->sortBy('price')->reverse();   
        return view('site.products', compact('products'));
    }

    public function galleryCategory($cat){
        $products = Product::where('cattegory', $cat)->get();       
        return view('site.category-products', compact('products'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('site.detail', compact('product'));
    }

    /**
     * Search key
     */

    public function searchproducts(Request $request){
        $key = $request->searchkey;
        $products = Product::where('name', 'LIKE', '%'.$key.'%')->get();
        return view('productList', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    
    {   
        
        $path = $request->file('image')->store('public/images');
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->cattegory = $request->cattegory;
        $product->price = $request->price;
        $product->image = $path;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added');
    }    
    public function storeproduct(Request $request)    
    {   
        
        $path = $request->file('image')->store('public/images');
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->cattegory = $request->cattegory;
        $product->price = $request->price;
        $product->image = $path;

        $product->save();

        return redirect()->route('home')->with('success', 'Product added');
    }

    public function sendEmail(Request $request)
    {   
        return $request;
        print "Inside send email";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('site.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('productEdit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/images');
            $product->image = $path;
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->cattegory = $request->cattegory;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('home')->with('success', 'Product added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('home')->with('success', 'Product Deleted');

    }
}
