<?php


namespace App\Currency;


use Laminas\Config\Factory;

class CartCurrency extends AbstractCurrency
{
    public string $name;
    public float $rate;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->rate = $this->obtainRate($name) ?? 0.00;
    }

    protected function obtainRate($name)
    {
        if ($name === '') {
            return 0.00;
        }
        $config = Factory::fromFile('config.json');
        $ratesProvider = $config['providers']['rates'];

        return (trim($name) != '') ? $rate = json_decode(
            file_get_contents($ratesProvider),
            true
        )['conversion_rates'][trim($name)] : null;
    }
}