<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\VendorProducts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductsVendor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = VendorProducts::with(['vendor','sub_category'])->paginate(10);
        return $products;
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
        $product = VendorProducts::findOrFail($id)->with(['vendor','sub_category'])->get();
        return $product;
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
        $product = VendorProducts::findOrFail($id);
        Storage::disk('public')->delete($product->image);
        $product->delete();


        return response([
            'code' => 1,
            'message' => 'Product Deleted',
        ],200,[
            'Content-Type' => 'application/json',
        ]);
    }
}
