<?php
include_once __DIR__ . '/Product.php';
class Toy extends Product
{
    public $type;
 public function __construct($_name, $image, $_categories, $_price, $type)
 {
    parent::__construct($_name, $image, $_categories, $_price);
    $this->type = $type;
    
 }

}