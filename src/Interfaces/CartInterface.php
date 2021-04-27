<?php


namespace App\Interfaces;


interface CartInterface
{
    public function processCart();

    public function getCartItems();

    public function setCart(string $fileName);
}