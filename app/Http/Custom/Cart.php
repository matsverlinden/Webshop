<?php
namespace App\Http\Custom;

use App\Product;

class Cart{

// cart moet items kunnen toevoegen, hoeveelheid opslaan order plaatsen.

    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart){
        //als er een oude cart is, zet het nieuwe item daar bij
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
        // zet anders de items terug op nul
        else{
            $this->items = null;
        }
    }

    public function add($item, $id){
        //voeg het item toe aan de cart dat is geselecteerd
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
        //als het item al bestaat overwrite het nieuwe dan met de oude
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++; 
        $this->totalPrice += $item->price;
    }
    
}


?>