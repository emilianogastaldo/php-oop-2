<?php

include_once __DIR__ . '/../Models/Category.php';

$dog = new Category('Cane');
$cat = new Category('Gatto');
$fish = new Category('Pesce');
$bird = new Category('Uccello');

// Secondo metodo per immagazzinare le categorie
$categories = [
    'dog' => new Category('Cane'),
    'cat' => new Category('Gatto'),
    'fish' => new Category('Pesce'),
    'bird' => new Category('Uccello')
];
