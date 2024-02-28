<?php

include_once __DIR__ . '/../Category.php';
include_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{

    private $expiration;
    private $ingridients;

    // tutte le istanze di FoodProduct avranno questa caratteristica 
    public static $type = 'food';
    public static $icon = 'fas fa-bowl';


    public function __construct(Category $category, $name, $image, $price, $expiration, array $ingredients)
    {
        parent::__construct($category, $name, $image, $price);
        $this->setIngridients($ingredients);
        $this->setExpiration($expiration);
    }

    // Type
    public function getType()
    {
        return 'Cibo';
    }

    // Expiration
    public function setExpiration(string $expiration)
    {
        $this->expiration = strtotime($expiration);
    }
    public function getExpiration($as_string = true)
    {
        if ($as_string) return date('d-m-Y', $this->expiration);
        return $this->expiration;
    }
    public function isExpired()
    {
        $today = strtotime(date('d-m-Y'));
        return $this->expiration > $today;
    }

    // Ingridients
    public function setIngridients(array $ingridients)
    {
        $this->ingridients = $ingridients;
    }
    public function getIngridients()
    {
        return $this->ingridients;
    }
    public function listIngridients(): string
    {
        return implode(', ', $this->ingridients);
    }
}
