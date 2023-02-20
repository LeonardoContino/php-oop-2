<?php
include_once __DIR__ . '/Products.php';
class Toy extends Product
{

 public function __construct($_name, $_categories, $_price)
 {
    parent::__construct($_name, $_categories, $_price);
    
 }

}