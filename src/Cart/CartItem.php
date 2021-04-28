<?php


namespace App\Cart;


use App\Currency\CartCurrency;

class CartItem extends AbstractCartItem
{
    public function __construct(string $id , string $name, int $quantity ,float $price ,CartCurrency $currency)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity ?? 0;
        $this->price = $price;
        $this->currency = $currency;
    }

}