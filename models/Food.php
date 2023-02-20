<?php
include_once __DIR__ . '/Product.php';
class Food extends Product
{
 public $datails_food;
 
 
 
 public function __construct($_name, $_categories, $_price, $datails_food)
 {
    parent::__construct($_name, $_categories, $_price);
    $this->datails_food = $details_food;
 }

}

