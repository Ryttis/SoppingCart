<?php


namespace App\Cart;

use App\Currency\CartCurrency;

abstract class AbstractCartItem
{
    protected string $code;
    protected string $name;
    protected int $quantity;
    protected float $price;
    protected CartCurrency $currency;


    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param  string  $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param  int  $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param  float  $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return CartCurrency
     */
    public function getCurrency(): CartCurrency
    {
        return $this->currency;
    }

    /**
     * @param  CartCurrency $currency
     */
    public function setCurrency(CartCurrency $currency): void
    {
        $this->currency = $currency;
    }

}