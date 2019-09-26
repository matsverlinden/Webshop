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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderView.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //insert into orders table
                //get values from the order blade with _POST
                $order = Order::create([
                    'user_id' => auth()->user() ? auth()->user()->id : null,
                    'user_email' => $_POST['user_email'],
                    'user_name' => $_POST['user_name'],
                    'totalPrice' => $_POST['total_price'],
                ]);
        

                //insert into order_product table
                //get product id and quantity from cart
                $cart = Session::get('cart');
                foreach ($cart as $item) {
                    OrderProduct::create([
                        'order_id' => $order->id,
                        'product_id' => $item['product']->id,
                        'quantity' => $item['qty'],
                    ]);
                }

                //Clear the shopping cart and send user back to the shop
                Session::forget('cart');
                return redirect('home')->with('message', 'Order placed!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderView  $orderView
     * @return \Illuminate\Http\Response
     */
    public function show(OrderView $orderView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderView  $orderView
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderView $orderView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderView  $orderView
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderView $orderView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderView  $orderView
     * @return \Illuminate\Http\Response
     */
    public function delete(OrderView $orderView)
    {
        //
    }
}
