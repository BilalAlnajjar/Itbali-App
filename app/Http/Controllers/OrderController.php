<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

       return view('admin.orders',[
           'orders' => $orders,
       ]);
    }

    public function indexPending()
    {
        $orders = Order::where('status','pending')->paginate(10);

       return view('admin.orders',[
           'orders' => $orders,
       ]);
    }

    public function indexProcessing()
    {
        $orders = Order::where('status','processing')->paginate(10);

       return view('admin.orders',[
           'orders' => $orders,
       ]);
    }

    public function indexDeclined()
    {
        $orders = Order::where('status','deslined')->paginate(10);

       return view('admin.orders',[
           'orders' => $orders,
       ]);
    }

    public function indexComplete()
    {
        $orders = Order::where('status','completed')->paginate(10);

       return view('admin.orders',[
           'orders' => $orders,
       ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.edit-order',[
            'order' => $order,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return back()->with("result",'success');
    }
}
