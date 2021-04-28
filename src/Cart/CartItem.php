<?php


namespace App\Cart;


use App\Currency\CartCurrency;

class CartItem extends AbstractCartItem
{
    public function __construct(string $code , string $name, int $quantity ,float $price ,CartCurrency $currency)
    {
        $this->code = $code;
        $this->name = $name;
        $this->quantity = $quantity ?? 0;
        $this->price = $price;
        $this->currency = $currency;
    }

}