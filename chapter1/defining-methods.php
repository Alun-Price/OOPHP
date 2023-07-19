<?php

// Create a Basket class
// Add itemsTotal and shippingCost public properties
// Instantiate a Basket using the new keyword
// Set values for both properties
// Use var_dump() and check your work in the browser
// (localhost:8000/defining-methods.php)


class Basket 
{
  public $itemsTotal;
  public $shippingCost;

  public function calculateSubTotal() {

    $subTotal = $this->itemsTotal + $this->shippingCost;
    
    return $subTotal;
  }
}

$alunBasket = new Basket();

$alunBasket->itemsTotal = 5;
$alunBasket->shippingCost = 1.30;

$alunBasket->calculateSubTotal();

$subTotal = $alunBasket->calculateSubTotal();
var_dump($subTotal);
