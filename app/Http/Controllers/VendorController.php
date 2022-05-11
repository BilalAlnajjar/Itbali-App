<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = vendor::paginate(10);

       return view('admin.vindor-list',[
           'vendors' => $vendors,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-new-vendor');
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
            'name' => 'required',
            'city' => 'required',
            'logo' => 'nullable',
            'category' => 'required',
            'email' => ['email','required'],
            'number_mobile' => ['required'],
            'password' => ['required'],
        ]);

        $vendor = Vendor::create($request->except('logo'));

        if($request->file('logo')){
            $path = $request->file('logo')->store('/images','public');
            $vendor->update([
                'logo' => $path,
            ]);
        }


        $request->session()->put('message','Completed Added Vendor Successfully');

        return back()->with('result','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $vendor = Vendor::findOrFail($id);

        if($vendor->image){
            Storage::disk('public')->delete($vendor->image);
        }

        $vendor->delete();

        $request->session()->put('message','Deleted Vendor Successfully');

        return back()->with("result",'success');
    }
}
