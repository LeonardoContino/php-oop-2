<?php
require __DIR__ . '/Categories.php';
class Product
{
 public $name;
 public $categories;
 public $price;
 public $image;
 
 
 public function __construct($_name, $image, Categories $_categories, $_price)
 {
    $this->name = $_name;
    $this->categories = $_categories;
    $this->price = $_price;
    $this->image = $image;
    
 }

}