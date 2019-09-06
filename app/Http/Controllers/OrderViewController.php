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
        $orderView = OrderView::latest()->paginate(5);
        return view('orderView.index', compact('orderView'))->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
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
