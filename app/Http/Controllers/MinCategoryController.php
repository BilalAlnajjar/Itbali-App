<?php

namespace App\Http\Controllers;

use App\Models\Min_Category;
use App\Models\Sub_Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MinCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_categories = Min_Category::paginate(10);

       return view('admin.main-category',[
           'main_categories' => $main_categories,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-main-category');
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
            'image' => 'nullable',
            'status' => 'nullable',
        ]);

        $status = "";
        if($request->status){
            $status = "Active";
        }
        else{
            $status = "InActive";
        }

        $min_category = Min_Category::create([
            'name' => $request->name,
            'status' => $status,
        ]);

        if($request->file('image')){
            $path = $request->file('image')->store('/images','public');
            $min_category->update([
                'image' => $path,
            ]);
        }

        $request->session()->put('message','Completed Added Main Category Successfully');

        return back()->with('result','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Min_Category  $min_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Min_Category $min_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Min_Category  $min_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main_category = Min_Category::findOrFail($id);
        return view('admin.edit-main-category',[
            'main_category' => $main_category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Min_Category  $min_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'status' => 'nullable',
        ]);

        $main_category = Min_Category::findOrFail($id);

        $status = "";
        if($request->status){
            $status = "Active";
        }
        else{
            $status = "InActive";
        }

        $main_category->update([
            'name' => $request->name,
            'status' => $status,
        ]);

        if($request->file('image')){
            $path = $request->file('image')->store('/images','public');
            $main_category->update([
                'image' => $path,
            ]);
        }


        $request->session()->put('message','Completed Updated Main Category Successfully');

        return back()->with('result','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Min_Category  $min_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $main_category = Min_Category::findOrFail($id);

        if($main_category->image){
            Storage::disk('public')->delete($main_category->image);
        }
        $main_category->delete();

        $request->session()->put('message','Deleted Main Category Successfully');

        return back()->with("result",'success');
    }
}
