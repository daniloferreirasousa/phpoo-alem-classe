<?php

class Cart
{
    private $items = [];
    
    public function add(Product $product)
    {
        array_push($this->items, $product);
    }

    public function all(): array
    {
        return $this->items;
    }
}

class Product
{
    public $name;
}

$p1 = new Product;
$p1->name = 'Pneu';

$p2 = new Product;
$p2->name = 'Amaciante';

$p3 = new Product;
$p3->name = 'Bola';

$cart = new Cart;
$cart->add($p1);
$cart->add($p2);
$cart->add($p3);
$products = $cart->all();
foreach($products as $item) {
    echo "Nome: <b>{$item->name}</b><br>";
}

