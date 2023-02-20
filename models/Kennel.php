<?php
include_once __DIR__ . '/Products.php';
class Kennel extends Product
{
 public $size;
 
 
 
 public function __construct($_name, $_categories, $_price, $size)
 {
    parent::__construct($_name, $_categories, $_price);
    $this->size = $size;
    
 }

}