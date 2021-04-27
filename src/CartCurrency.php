<?php


namespace App;


class CartCurrency extends AbstarctCurrency
{
public string $name;
public float $rate;

    public function __construct($name, $rate)
    {
        $this->name=$name;
        $this->rate=$rate;
    }
}