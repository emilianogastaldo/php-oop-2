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

    public function getPrice(){
        return $this->price;
    }

    public function getCategory(){
        return $this->category->getCategory();
    }

    public function getIcon(){
        if($this->getCategory()==='Cane') return 'dog';
        if($this->getCategory()==='Gatto') return 'cat';
        if($this->getCategory()==='Pesce') return 'fish';
        if($this->getCategory()==='Uccello') return 'dove';
        else return 'circle-xmark';
    }
}

?>