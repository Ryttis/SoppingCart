<?php


namespace App\Cart;

use App\Currency\CartCurrency;
use App\Interfaces\CartInterface;


class ShoppingCart extends AbstractCartItem implements CartInterface
{
    private array $cartTotal = [];
    private CartItem $cartItem;
    public float $grandTotal = 0;

    /**
     * @param $fileName
     */
    protected function loadItems($fileName): void
    {
        try {
            $file = fopen($fileName, "r");

            while (!feof($file)) {
                $fLine = fgets($file);
                $line = explode(',', str_replace(';', ',', $fLine));
                $this->cartItem = new CartItem(
                    $line[0], $line[1], $line[2], floatval($line[3]),
                    new CartCurrency($line[4])
                );
                array_push($this->cartTotal, $this->cartItem);
            }

            fclose($file);

        } catch (\Exception $ex) {

            echo 'Viskas blogai, neradome filo: '.$ex->getMessage();
        }
    }

    /**
     * @param  string  $fileName
     */
    public function setCart($fileName): void
    {
        $this->loadItems($fileName);
    }

    /**
     *
     */
    public function checkOutCart()
    {
        foreach ($this->cartTotal as $item) {
            $this->calculateCart($item);
        }
        print("\n Grand Total: ");
        echo $this->grandTotal." EUR";
    }

    /**
     *
     */
    protected function calculateCart($item): void
    {
        $this->grandTotal = $item->price * $item->currency->rate * $item->quantity + $this->grandTotal;
    }

    /**
     *
     */
    public function getCartItems()
    {
        // TODO: Implement getCartItems() method.
    }
}