<?php

include_once __DIR__ . '/../Category.php';

class Product
{
    protected $id;
    protected $category;
    protected $name;
    protected $image;
    protected $price;

    public function __construct(Category $category, $name, $image, $price)
    {
        $this->setId();
        $this->setCategory($category);
        $this->setName($name);
        $this->setImage($image);
        $this->setPrice($price);
    }

    // ID
    private function setId()
    {
        $this->id = uniqid();
    }
    public function getId()
    {
        return $this->id;
    }
    // Category
    public function getCategory()
    {
        return $this->category->getCategory();
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    // Name
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    // Image
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    // Price
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }


    public function getIcon()
    {
        if ($this->getCategory() === 'Cane') return 'dog';
        if ($this->getCategory() === 'Gatto') return 'cat';
        if ($this->getCategory() === 'Pesce') return 'fish';
        if ($this->getCategory() === 'Uccello') return 'dove';
        else return 'circle-xmark';
    }
}
