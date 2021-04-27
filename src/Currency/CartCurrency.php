<?php


namespace App\Currency;


class CartCurrency extends AbstractCurrency
{
public string $name;
public float $rate;

    public function __construct(string $name, float $rate)
    {
        $this->name=$name ?? '';
        $this->rate=$rate ?? 0;
    }
}