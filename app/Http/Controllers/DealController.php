<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals = Deal::all();
        return view('dealList', compact('deals'));
    }

    public function categoryindex($cat)
    {   
        $deals = Deal::where('cattegory', $cat)->get();        
        return view('deal.list', compact('deals'));
    }

    public function dealindex()
    {   
        $deals = Deal::where('cattegory', 'deal')->get();           
        return view('deal.list', compact('deals'));
    }

    public function saveindex()
    {   
        $deals = Deal::where('cattegory', 'save')->get();           
        return view('deal.list', compact('deals'));
    }

    public function clearanceindex()
    {   
        $deals = Deal::where('cattegory', 'clearance')->get();           
        return view('deal.list', compact('deals'));
    }

    public function chilrenindex()
    {   
        $deals = Deal::where('cattegory', 'children')->get();           
        return view('deal.list', compact('deals'));
    }

    public function flyerindex()
    {   
        $deals = Deal::where('cattegory', 'flyer')->get();           
        return view('deal.list', compact('deals'));
    }

    public function packageindex()
    {   
        $deals = Deal::where('cattegory', 'package')->get();           
        return view('deal.list', compact('deals'));
    }

    public function searchdeals(Request $request){
        $key = $request->searchkey;
        $deals = Deal::where('name', 'LIKE', '%'.$key.'%')->get();
        return view('dealList', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dealCreate');
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
        $deal = new Deal;

        $deal->name = $request->name;
        $deal->description = $request->description;
        $deal->cattegory = $request->cattegory;
        $deal->price = $request->price;
        $deal->image = $path;

        $deal->save();

        return redirect()->route('deallist')->with('success', 'Deal added');
    }

    public function storedeal(Request $request)
    {
        $path = $request->file('image')->store('public/images');
        $deal = new Deal;

        $deal->name = $request->name;
        $deal->description = $request->description;
        $deal->cattegory = $request->cattegory;
        $deal->price = $request->price;
        $deal->image = $path;

        $deal->save();

        return redirect()->route('dealclearance')->with('success', 'Deal added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        return view('deal.detail', compact('deal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        return view('dealEdit', compact('deal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deal = Deal::find($id);

        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/images');
            $deal->image = $path;
        }
        $deal->name = $request->name;
        $deal->description = $request->description;
        $deal->cattegory = $request->cattegory;
        $deal->price = $request->price;

        $deal->save();

        return redirect()->route('dealclearance')->with('success', 'Product added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        $deal->delete();

        return redirect()->route('dealclearance')->with('success', 'Product Deleted');
    }
}
