<?php
include_once __DIR__ . '/Categories.php';
class Dogs extends Categories
{
    public function __construct($foods, $kenneld, $toys, $medicines)
    {
        parent::__construct($foods, $kenneld, $toys, $medicines);
    }
}