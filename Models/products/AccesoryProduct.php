<?php

include_once __DIR__ . '/../Category.php';
include_once __DIR__ . '/Product.php';

class AccesoryProduct extends Product
{

    private $color;
    private $size;

    // tutte le istanze di ToyProduct avranno questa caratteristica 
    public static $type = 'accesory';

    public function __construct(Category $category, $name, $image, $price, $color, string $size)
    {
        parent::__construct($category, $name, $image, $price);
        $this->setColor($color);
        $this->setSize($size);
    }

    // Type
    public  function getType()
    {
        return 'Accessori';
    }
    // Color
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    // Size
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
}
