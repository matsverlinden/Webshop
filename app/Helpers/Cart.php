<?php

namespace App\Helpers;
use App\Product;

class Cart
{
    public $cartTotalPrice = 0;
    
    public function show()
    {
        $cart = session('cart',[]);
        if (count($cart)) {
            foreach ($cart as $item) {
                $product = Product::find($item['id']);
                $product['quantity'] = $item['quantity'];
                $product['productTtl'] = $product['amount'] * $product['quantity'];
                $this->cartTotalPrice += $product['productTtl'];
                $products[] = $product;
            }
            return $products;
        } else {
            return[];
        }   
    }
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
}