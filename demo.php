<?php

class Order
{
    public $products;
    public $price;
    public $customer;

    public function __construct($products,$price,$customer)
    {
     $this->products = $products;
     $this->price = $price;
     $this->customer = $customer;
    }

    public function productCount()
    {
        return count ($this->products);
    }
    public function echoProductCount()
    {
        echo $this->productCount(); //vypíše to z předchozí funkce - verze 2
    }
}

$products = [' Pračka AEG', 'Žehlička Zanussi'];

$order = new Order($products, 12000, 'Josef Novák');

//echo $order->customer;
foreach ($order ->products as $item){
    echo $item;
    echo '<br>';
}
//echo $ordr ->products[0]

//$novacena=$order->price;
//$snizenacena=$novacena-100;
//$order->price=$snizenacena; //ukládání do objektu

$order->price=$order->price-100; //zjednodušení předešlého

echo $order->productCount(); //vypíše počet produktů - verze 1
$order->echoProductCount();


