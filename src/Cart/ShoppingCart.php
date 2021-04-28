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
     * @param  string  $fileName
     */
    protected function loadItems(string $fileName): void
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
     * Loads cart items
     * @param  string  $fileName
     */
    public function setCart($fileName): void
    {
        $this->loadItems($fileName);
    }

    /**
     *  calculates cart Checkout Amount
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
     *  if quantity is greater than 0 increases cart Checkout Amount by particular item sum
     */
    protected function calculateCart($item): void
    {
        if ($item->quantity > 0) {
            $this->grandTotal = $item->price * $item->currency->rate * $item->quantity + $this->grandTotal;
        }
    }

    /**
     * @return ShoppingCart
     */
    public function getCartItems() : ShoppingCart
    {
       return $this;
    }
}