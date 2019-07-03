<?php

namespace App\Helpers;
use App\Product;

class Cart
{
    
    public static function get()
    {

        return session('cart', []);

    }


    public static function add($product, $qty = 1 )
    {
        $cart = session('cart',[]);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] += $qty;
        } 
        else{
            $cart[$product->id] = [
                'product' => $product,
                'qty' => $qty,
            ];
        }
        session(['cart' => $cart]);
    }
    public static function remove($product, $qty = 1){
        $cart = session('cart',[]);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] -= $qty;
        } 

        if ($cart[$product->id]['qty'] <= 0) {
            unset($cart[$product->id]);
        }

        session(['cart' => $cart]);
    }
 
    public static function delete( Product $product, $qty = 0)
    {
        $cart = session('cart',[]);
        unset($cart[$product->id]);
        session(['cart' => $cart]);
    }

}

?>