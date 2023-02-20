<?php

class Product
{
 public $name;
 public $categories;
 public $price;
 
 
 public function __construct($_name, $_categories, $_price)
 {
    $this->name = $_name;
    $this->categories = $_categories;
    $this->price = $_price;
    
 }

}