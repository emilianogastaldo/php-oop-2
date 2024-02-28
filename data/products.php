<?php

include_once __DIR__ . '/categories.php';
include_once __DIR__ . '/../Models/products/FoodProduct.php';
include_once __DIR__ . '/../Models/products/AccesoryProduct.php';
include_once __DIR__ . '/../Models/products/ToyProduct.php';



// $royal_food = new FoodProduct($dog, 'Royal Canin Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', rand(1,100), 'Cibo');
// $almo_dog_food = new FoodProduct($dog, 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', rand(1,100), 'Cibo');
// $almo_cat_food = new FoodProduct($cat, 'Almo Nature Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', rand(1,100), 'Cibo');
// $fish_food = new FoodProduct($fish, 'Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', rand(1,100), 'Cibo');
// $bird_cage = new Product($bird, 'Accessori', 'Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', rand(1,100));
// $fish_filter = new Product($fish, 'Accessori', 'Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', rand(1,100));
// $dog_toy = new Product($dog, 'Giochi', 'Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', rand(1,100));
// $cat_toy = new Product($cat, 'Giochi', 'Topini di peluche Trixie' ,'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', rand(1,100));

// $products = [$royal_food, $almo_dog_food, $almo_cat_food, $fish_food, $bird_cage, $fish_filter, $dog_toy, $cat_toy];

$products = [
    // food: (Category $category, $name, $image, $price, $expiration, $ingredients)
    new FoodProduct(
        $categories['dog'],
        'Royal Canin Mini Adult',
        'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',
        rand(1, 100),
        '2024-11-10',
        ['riso', 'prosciutto']
    ),
    new FoodProduct(
        $categories['dog'],
        'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
        rand(1, 100),
        '2024-11-10',
        ['riso', 'tonno']
    ),
    new FoodProduct(
        $categories['cat'],
        'Almo Nature Cat Daily Lattina',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
        rand(1, 100),
        '2024-11-10',
        ['riso', 'prosciutto']
    ),
    new FoodProduct(
        $categories['fish'],
        'Mangime per Pesci Guppy in Fiocchi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
        rand(1, 100),
        '2024-11-10',
        ['riso', 'prosciutto']
    ),
    // accesory: (Category $category, $name, $image, $price, $color, $size)
    new AccesoryProduct(
        $categories['bird'],
        'Voliera Wilma in Legno',
        'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
        rand(1, 100),
        'white',
        '35x40'
    ),
    new AccesoryProduct(
        $categories['fish'],
        'Cartucce Filtranti per Filtro EasyCrystal',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
        rand(1, 100),
        'filter',
        'small'
    ),
    // toy: (Category $category, $name, $image, $price, $color, $materials)
    new ToyProduct(
        $categories['dog'],
        'Kong Classic',
        'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
        rand(1, 100),
        'red',
        ['rubber', 'plastic']
    ),
    new ToyProduct(
        $categories['cat'],
        'Topini di peluche Trixie',
        'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
        rand(1, 100),
        'white',
        ['cotton', 'peluche']
    )
];

$food_products = array_filter($products, fn ($p) => $p::$type === 'food');
$toy_products = array_filter($products, fn ($p) => $p::$type === 'toy');
$accesory_products = array_filter($products, fn ($p) => $p::$type === 'accesory');
