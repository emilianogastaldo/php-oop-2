<?php

include_once __DIR__ . '/../Models/Product.php';
include_once __DIR__ . '/categories.php';

// __construct(Category $category, $type, $name, $image, $price )

$royal_food = new Product($dog, 'Cibo', 'Royal Canin Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', rand(1,100));
$almo_dog_food = new Product($dog, 'Cibo', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', rand(1,100));
$almo_cat_food = new Product($cat, 'Cibo', 'Almo Nature Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', rand(1,100));
$fish_food = new Product($fish, 'Cibo', 'Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', rand(1,100));
$bird_cage = new Product($bird, 'Accessori', 'Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', rand(1,100));
$fish_filter = new Product($fish, 'Accessori', 'Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', rand(1,100));
$dog_toy = new Product($dog, 'Giochi', 'Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', rand(1,100));
$cat_toy = new Product($cat, 'Giochi', 'Topini di peluche Trixie' ,'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', rand(1,100));

$products = [$royal_food, $almo_dog_food, $almo_cat_food, $fish_food, $bird_cage, $fish_filter, $dog_toy, $cat_toy];


?>