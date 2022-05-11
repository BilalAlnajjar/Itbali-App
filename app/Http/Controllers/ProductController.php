<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use Psy\Exception\ErrorException;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::paginate(10);

       return view('admin.products',[
           'products' => $products,
       ]);
    }

    public function indexInActive(){
        $products = Product::where('status',"InActive")->paginate(10);
        return view('admin.products',[
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'price' => ['required','numeric'],
            'image' => ['required'],
            'quantity' => ['required'],
            'date' => ['required'],
            'product_type' => ['required'],
            'created_by' => ['required'],
        ]);


        $path = $request->image->store('/images','public');

        $status = "";
        if($request->status){
            $status = "Active";
        }
        else{
            $status = "InActive";
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => strip_tags($request->description),
            'image' => $path,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'date' =>  $request->date,
            'product_type' =>  $request->product_type,
            'created_by' =>  $request->created_by,
            'status' => $status,
        ]);
        $request->session()->put('message','Completed Added Product Successfully');
        return back()->with('result', "success");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.edit-product',[
            "product" => $product,

        ]);
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
            $request->validate([
                'name' => ['required'],
                'price' => ['required','numeric'],
                'quantity' => ['required'],
                'date' => ['required'],
                'product_type' => ['required'],
                'created_by' => ['required'],
            ]);

            $product = Product::findOrFail($id);

            $status = "";
            if($request->status){
                $status = "Active";
            }
            else{
                $status = "InActive";
            }

            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'date' =>  $request->date,
                'product_type' =>  $request->product_type,
                'created_by' =>  $request->created_by,
                'status' => $status,
            ]);
            $request->session()->put('message','Completed Updated Product Successfully');
            return back()->with('result', "success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('public')->delete($product->image);
        $product->delete();

        $request->session()->put('message','Deleted Product Successfully');

        return back()->with("result",'success');
    }
}
