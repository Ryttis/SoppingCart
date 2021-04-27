<?php


namespace App;


class ShoppingCart extends AbstractCartItem implements CartInterface
{

    private $fileName;
    private $cartTotal;
    private $transactionData;


    public function __construct($fileName)
    {
       $this->fileName = $fileName;
       $this->cart = $this->openFile();
    }

    public function processCart()
    {
        $transactionData = $this->openFile();
        $this->parseData();

        foreach ($transactionData as $data) {
           $this->cartTotal->$this->calculateCart();

        }
        print("\n Cart Total");
        echo $this->cartTotal . "EUR";
    }

    protected function openFile()
    {

        return file_get_contents($this->fileName);
    }

    protected function parseData() :void
    {
         // parse data
    }

    protected function retrieveRate()
    {
//        return current rate;
    }

    protected function calculateCart() :void
    {
//      retrieveRate
//     calculate cart
    }
}