<?php

namespace App\Http\Controllers;

use App\OrderView;
use Illuminate\Http\Request;

class OrderViewController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orderView = OrderView::latest()->paginate(5);
        // return view('orderView.index', compact('orderView'))->with('i', (request()->input('page',1) -1)*5);
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
                $order = Order::create([
                    'user_id' => auth()->user() ? auth()->user()->id : null,
                    'user_email' => $request->email,
                    'user_name' => $request->name,
                    'totalPrice' => null
                ]);
        
                //insert into order_product table
                foreach ($cart as $item) {
                    OrderProduct::create([
                        'order_id' => $order->id,
                        'product_id' => $item->product->id,
                        'quantity' => $item->qty
                    ]);
                }
        
                Cart::instance('default')->destroy();
                return redirect()->route('/');




        // $order = new Order([
        //     'order_id' => $request->get('order_id'),
        //     'product_id' => $request->get('product_id'),
        //     'quantity' => $request->get('quantity'),
        //     'price' => $request->get('price')
        // ]);
        // $order->save();
        // return redirect('/orderView.index')->with('success', 'order saved!');
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
