<?php

namespace App\Http\Controllers;

use App\Product;
use Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return View('product.index', compact('product'));
 
        // $category = DB::table('category')
        //     ->join('products', 'category.id', '=', 'products.category_id')
        //     ->join('orders', 'category.id', '=', 'orders.category_id')
        //     ->select('category.*', 'products.phone', 'orders.price')
        //     ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'price' => 'required',
            'product_category' => 'required'
        ]);

        $products = new Product();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->product_category = $request->product_category;
        $products->save();

        Session::flash('flash_message_create', 'Product succesfully added');
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return View('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return View('product.edit', compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate(request(),[
            'name' => 'required',
            'price' => 'required',
            'product_category' => 'required'
            ]);

        
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->product_category = $request->input('product_category');
            $product->save();
        
        \Session::flash('flash_message_create', 'Product Successfully Updated!');
        return Redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        \Session::flash('flash_message_create', 'Product Successfully Deleted!');
        return redirect('product');
    }
}
