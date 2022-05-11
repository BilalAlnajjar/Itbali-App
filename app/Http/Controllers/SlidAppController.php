<?php

namespace App\Http\Controllers;

use App\Models\SlidApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlidAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slids = SlidApp::paginate(10);
        return view('admin.slider-app-home-page',[
            'slids' => $slids,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-slider-app');
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
            'title' => 'required',
            'sub_title' => 'nullable',
            'image' => 'required',
        ]);

        $path = $request->image->store('/images','public');

        $slider = SlidApp::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => $path,
        ]);

        $request->session()->put('message','Completed Added Slider Successfully');
        return back()->with('result', "success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SlidApp  $slid
     * @return \Illuminate\Http\Response
     */
    public function show(SlidApp $slid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slid  $slid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slid = SlidApp::findOrFail($id);

        return view('admin.edit-slider-app',[
            'slid' => $slid,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slid  $slid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'nullable',
            'image' => 'nullable',
        ]);

        $slid = SlidApp::findOrFail($id);

        $slid->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
        ]);

        if($request->file('image')){

            $path = $request->image->store('/images','public');
            $slid->update([
                'image' => $path,
            ]);
        }

        $request->session()->put('message','Completed Added Slider Successfully');
        return back()->with('result', "success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slid  $slid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $slid = SlidApp::findOrFail($id);
        Storage::disk('public')->delete($slid->image);
        $slid->delete();

        $request->session()->put('message','Deleted Slider Successfully');

        return back()->with("result",'success');
    }
}
