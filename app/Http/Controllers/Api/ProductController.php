<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getRecordsById(Request $request) {
        // return Product::only($request->cartItemsIds);
        // return gettype($request->cartItemsIds);
        // return print_r($request->cartItemsIds);
        return Product::find($request->cartItemsIds);
    }


    public function products($amount) {
        if ($amount == "all") {
            return Product::all();
        }
        return Product::limit($amount)->get();
    }

    public function filteredProducts($filter) {
        if ($filter == "all") {
            return Product::all();
        }
        // return Category::where('title', $filter)->with('products')->get();


        return Product::whereRelation(
            'category', 'title', $filter
        )->get();
        // return Product::whereHas
        // return Product::limit($filter)->get();
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
