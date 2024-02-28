<?php

include_once __DIR__ . '/../Category.php';
include_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{

    private $color;
    private $materials;

    // tutte le istanze di ToyProduct avranno questa caratteristica 
    public static $type = 'toy';
    public static $icon = 'fas fa-bone';

    public function __construct(Category $category, $name, $image, $price, $color, array $materials)
    {
        parent::__construct($category, $name, $image, $price);
        $this->setColor($color);
        $this->setMaterials($materials);
    }

    // Type
    public function getType()
    {
        return 'Giochi';
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
    // Ingridients
    public function setMaterials(array $materials)
    {
        $this->materials = $materials;
    }
    public function getMaterials()
    {
        return $this->materials;
    }
    public function listMaterials(): string
    {
        return implode(', ', $this->materials);
    }
}
