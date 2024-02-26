<?php

include_once __DIR__ . '/Category.php';

class Product {
    public $id;
    public $category;
    public $type;
    public $name;
    public $image;
    private $price;

    public function __construct(Category $category, $type, $name, $image, $price ){
        $this->id = uniqid();
        $this->category = $category;
        $this->type = $type;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }
    
    public function setPrice($price){
        $this->price = $price;
    }
}

?>