<?php


namespace App\Interfaces;


interface CartInterface
{
    public function checkOutCart();

    public function getCartItems();

    public function setCart(string $fileName);
}