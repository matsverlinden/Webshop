<?php

namespace App\Http\Controllers;

use App\OrderView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderProduct;
use App\Cart;
use App\Product;
use Session;

class OrderViewController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $orders = Order::all();
        $products = Product::all();
        $orderProduct = Orderproduct::all();

        return view('orderView.index')->with([
            'user' => $user,
            'orders' => $orders,
            'products' => $products,
            'orderProduct' => $orderProduct
        ]);
    }

}
