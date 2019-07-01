<?php

namespace App;

use App\Product;

class Cart{

// cart moet products kunnen toevoegen, hoeveelheid opslaan order plaatsen.

    public $products;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        //als er een oude cart is, zet het nieuwe product daar bij
        if ($oldCart) {
            $this->products = $oldCart->products;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
        // zet anders de products terug op nul
        else{
            $this->products = null;
        }
    }

    public function add($product, $id){
        //voeg het product toe aan de cart dat is geselecteerd
        $storedProduct = ['qty' => 0, 'price' => $product->price, 'product' => $product];
        if ($this->products) {
        //als het product al bestaat overwrite het nieuwe dan met de oude
            if (array_key_exists($id, $this->products)) {
                $storedProduct = $this->products[$id];
            }
        }
        $storedProduct['qty']++;
        $storedProduct['price'] = $product->price * $storedProduct['qty'];
        $this->products[$id] = $storedProduct;
        $this->totalQty++; 
        $this->totalPrice += $product->price;
    }
    
}


?>