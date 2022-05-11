<?php

namespace App\Http\Controllers;

use App\Models\Soical;
use Illuminate\Http\Request;

class SoicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting-social');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Soical::create($request->all());
        $request->session()->put('message','Completed Added Soical Links Successfully');
        return back()->with('result', "success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soical  $soical
     * @return \Illuminate\Http\Response
     */
    public function show(Soical $soical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soical  $soical
     * @return \Illuminate\Http\Response
     */
    public function edit(Soical $soical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soical  $soical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soical $soical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soical  $soical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soical $soical)
    {
        //
    }
}
