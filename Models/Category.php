<?php

class Category{
    private $id;
    private $category;

    public function __construct ($category){
        $this->id = uniqid();
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }
  
    public function setCategory(string $newCategory){
        $this->category = $newCategory;
    }

    public function getID(){
        return $this->id;
    }
}
?>