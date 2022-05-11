<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Sub_Category;
use Illuminate\Http\Request;
use App\Models\VendorProducts;
use Illuminate\Support\Facades\Storage;

class VendorProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('admin.vendor-product',[

        'vendor' => $vendor,
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $vendor = Vendor::findOrFail($id);
        $sub_categories = Sub_Category::all();
        return view('admin.add-vendor-product',[
            'vendor' => $vendor,
            'sub_categories' => $sub_categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $request->validate([
            'sub__category_id' => ['required','exists:sub__categories,id'],
            'name' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $path = $request->image->store('/images','public');

        $product = VendorProducts::create([
         'name' => $request->name,
         'discount' => $request->discount,
         'sub__category_id' => $request->sub__category_id,
         'description' => $request->description,
         'image' => $path,
         'vendor_id' => $id,
        ]);

        $request->session()->put('message','Completed Added Product Successfully');
        return back()->with('result', "success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VendorProducts  $vendorProducts
     * @return \Illuminate\Http\Response
     */
    public function show(VendorProducts $vendorProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VendorProducts  $vendorProducts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = VendorProducts::findOrFail($id);
        $sub_categories = Sub_Category::get();
        // return $product->sub_category()->first()->id;
        return view('admin.edit-vendor-product',[
            'sub_categories' => $sub_categories,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VendorProducts  $vendorProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sub__category_id' => ['required','exists:sub__categories,id'],
            'name' => 'required',
            'discount' => 'required',
            'description' => 'required',
        ]);

        $product = VendorProducts::findOrFail($id);

        $product->update([
         'name' => $request->name,
         'discount' => $request->discount,
         'sub__category_id' => $request->sub__category_id,
         'description' => $request->description,
         'vendor_id' => $id,
        ]);

        if($request->hasFile('image')){
            $path = $request->image->store('/images','public');
            $product->update([
                'image' => $path,
            ]);
        }

        $request->session()->put('message','Completed Update Product Successfully');
        return back()->with('result', "success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VendorProducts  $vendorProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $product = VendorProducts::findOrFail($id);
        Storage::disk('public')->delete($product->image);
        $product->delete();

        $request->session()->put('message','Deleted Product Successfully');

        return back()->with("result",'success');
    }
}
