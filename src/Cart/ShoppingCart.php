<?php


namespace App\Cart;

use App\Currency\CartCurrency;
use App\Interfaces\CartInterface;
use PHPUnit\Exception;
use function PHPUnit\Framework\throwException;

class ShoppingCart extends AbstractCartItem implements CartInterface
{
    private array $cartTotal =[];
    private CartItem $cartItem;

    protected function loadItems($fileName)
    {
        try {
            $file = fopen($fileName, "r");

            while(! feof($file)) {
                $fLine = fgets($file);
                $line = explode(',', str_replace(';',',', $fLine));
                $this->cartItem = new CartItem(
                    $line[0], $line[1], $line[2], $line[3],
                    new CartCurrency($line[4] ?? '', 0.00));
               array_push($this->cartTotal, $this->cartItem);
            }
            var_dump($this->cartTotal);
            exit;
            fclose($file);

        } catch (\Exception $ex) {

          echo 'Viskas blogai: ' . $ex->getMessage();
        }
    }

    protected function parseData(): void
    {
       //
    }

    protected function retrieveRate()
    {
//        return current rate;
    }

    protected function calculateCart(): void
    {
//      retrieveRate
//     calculate cart
    }

    public function setCart($fileName)
    {
        $this->loadItems($fileName);
        var_dump($this->cartTotal);
    }

    public function processCart()
    {

        echo $this->transData;
//        foreach ($transactionData as $data) {
//            $this->cartTotal->$this->calculateCart();
//
//        }
//        print("\n Cart Total");
//        echo $this->cartTotal."EUR";
    }

    public function getCartItems()
    {
        // TODO: Implement getCartItems() method.
    }
}