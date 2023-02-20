<?php
include_once __DIR__ . '/Product.php';
class Kennel extends Product
{
 public $size;
 
 
 
 public function __construct($_name, $image, $_categories, $_price, $size)
 {
    parent::__construct($_name, $image, $_categories, $_price);
    $this->size = $size;
    
 }

}