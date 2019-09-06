<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Helpers\Cart;


class CartController extends Controller
{
    public function __construct(){
        $this->cart = new Cart();
    }
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cart.index')->with([
            'cart' => Cart::get(),
        ]);
    }
    
    public function add($id)
    {
        $product = Product::findOrFail($id);
        Cart::add($product);

        return redirect()->route('cart.index');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        Cart::delete($product);        

        return redirect()->route('cart.index');
    }
    
    public function remove($id)
    {
        $product = Product::findOrFail($id);
        Cart::remove($product);

        return redirect()->route('cart.index');
    }

    public function emptySession()
    {
    Cart::emptySession();
    return redirect()->route('cart.index');
}

}
