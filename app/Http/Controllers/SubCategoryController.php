<?php

namespace App\Http\Controllers;

use App\Models\SubMain;
use App\Models\Sub_Main;
use App\Models\Min_Category;
use App\Models\Sub_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = Sub_Category::paginate(10);


        return view('admin.sub-category',[
            'sub_categories' => $sub_categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = Min_Category::all();
        return view('admin.add-sub-category',[
            'main_categories' => $main_categories,
        ]);
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
            'main_category_id' => ['required','exists:min__categories,id'],
        ]);

        $status = "";
        if($request->status){
            $status = "Active";
        }
        else{
            $status = "InActive";
        }


        $sub_Category = Sub_Category::create([
            'name' => $request->name,
            'status' => $status,
            'min__category_id' => $request->main_category_id,
        ]);

        if($request->file('image')){
            $path = $request->file('image')->store('/images','public');
            $sub_Category->update([
                'image' => $path,
            ]);
        }


        $request->session()->put('message','Completed Added Sub Category Successfully');

        return back()->with('result','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_Category $sub_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_category = Sub_Category::findOrFail($id);
        $main_categories = Min_Category::all();

        return view('admin.edit-sub-category',[
            'sub_category' => $sub_category,
            'main_categories' => $main_categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'status' => 'nullable',
            'main_category_id' => 'required',
        ]);

        $sub_category = Sub_Category::findOrFail($id);

        $status = "";
        if($request->status){
            $status = "Active";
        }
        else{
            $status = "InActive";
        }

        $sub_category->update([
            'name' => $request->name,
            'status' => $status,
            'min__category_id' =>  $request->main_category_id,
        ]);

        if($request->file('image')){
            $path = $request->file('image')->store('/images','public');
            $sub_category->update([
                'image' => $path,
            ]);
        }


        $request->session()->put('message','Completed Updated Sub Category Successfully');

        return back()->with('result','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $sub_category = Sub_Category::findOrFail($id);

        if($sub_category->image){
            Storage::disk('public')->delete($sub_category->image);
        }
        $sub_category->delete();

        $request->session()->put('message','Deleted Sub Category Successfully');

        return back()->with("result",'success');
    }
}
