<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->take('10')->get();
        return view('admin.index',[
            'orders' => $orders,
            'online_visitor' => DB::table('sessions')->count(),
            'orders_count' => DB::table('orders')->count(),
            'product_count' => DB::table('products')->count(),
        ]);
    }

    public function index2(){

        return view('home');
    }
}
