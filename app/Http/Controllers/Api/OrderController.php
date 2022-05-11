<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderProduct;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::findOrFail($id);
        $orders = $user->orders()->get();

        return response()->json($orders);
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
            'quantity' => 'int',
            'date' => ['required','date'],
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $number = random_int(100,100000);
        $amount = Product::find($request->product_id)->price * $request->quantity;

        $status = "";
            if($request->status){
                $status = "Active";
            }
            else{
                $status = "InActive";
            }

            $order = Order::create([
                'number' => $number,
                'user_id' => $request->user_id,
                'quantity' => $request->quantity ? $request->quantity : 1,
                'amount' => $amount,
                'date' => $request->date,
            ]);

            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $request->product_id,
                'price' => Product::find($request->product_id)->price,
            ]);

            return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);

        return response()->json($order);
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
        $order = Order::findOrFail($id);

        $order->update($request->all());

        if($request->quantity){
            $amount = $order->products()->first()->price * $request->quantity;

            $order->update([
                'amount' => $amount,
            ]);
        }

        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response([
            'code' => 1,
            'message' => 'order Deleted',
        ]);
    }
}
