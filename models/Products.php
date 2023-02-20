<?php

class Products
{
 public $name;
 public $categories;
 public $price;
 public $product_datails;
 
 public function __construct($_name, $_categories, $_price, $_product_details)
 {
    $this->name = $_name;
    $this->categories = $_categories;
    $this->price = $_price;
    $this->product_details = $_product_details;

 }

}