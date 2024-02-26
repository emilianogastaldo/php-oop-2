<?php

class Category{
    private $category;

    public function __construct ($category){
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory(string $newCategory){
        $this->category = $newCategory;
    }
}
?>