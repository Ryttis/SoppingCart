<?php


namespace App\Currency;

abstract class AbstractCurrency
{
    public string $name;
    public float $rate;

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
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param  float  $rate
     */
    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }
}