<?php
include_once __DIR__ . '/data/products.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' />
    <title>OOP 2</title>
</head>

<body>
    <main class="my-4">
        <div class="container">
            <h1>PRODOTTI</h1>
            <div class="row g-5">
                <?php foreach ($products as $product) : ?>
                    <div class="col-3">
                        <div class="card">
                            <img class="img-fluid card-img-top" src="<?= $product->getImage() ?>" alt="<?= $product->getCategory() ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->getName() ?></h5>
                                <p class="card-text">Prezzo: €<?= $product->getPrice() ?></p>
                                <p class="card-text"> <?= $product->getType() ?> <i class="fas fa-<?= $product->getIcon() ?>"></i> </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <section>
                <h2>CIBO</h2>
                <div class="row g-5">
                    <?php foreach ($food_products as $product) : ?>
                        <div class="col-3">
                            <div class="card">
                                <img class="img-fluid card-img-top" src="<?= $product->getImage() ?>" alt="<?= $product->getCategory() ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product->getName() ?></h5>
                                    <div class="card-text">
                                        Contiene: <?= $product->listIngridients() ?> <br>
                                        Scade nel: <?= $product->getExpiration() ?>
                                    </div>
                                    <p class="card-text">Prezzo: €<?= $product->getPrice() ?></p>
                                    <p class="card-text"> <?= $product->getType() ?> <i class="fas fa-<?= $product->getIcon() ?>"></i></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
            <section>
                <h2>ACCESSORI</h2>
                <div class="row">
                    <?php foreach ($accesory_products as $product) : ?>
                        <div class="col-3">
                            <div class="card">
                                <img class="img-fluid card-img-top" src="<?= $product->getImage() ?>" alt="<?= $product->getCategory() ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product->getName() ?></h5>
                                    <div class="card-text">
                                        Colore: <?= $product->getColor() ?> <br>
                                        Dimensioni: <?= $product->getSize() ?>
                                    </div>
                                    <p class="card-text">Prezzo: €<?= $product->getPrice() ?></p>
                                    <p class="card-text"> <?= $product->getType() ?> <i class="fas fa-<?= $product->getIcon() ?>"></i></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
            <section>
                <h2>GIOCATTOLI</h2>
                <div class="row">
                    <?php foreach ($toy_products as $product) : ?>
                        <div class="col-3">
                            <div class="card">
                                <img class="img-fluid card-img-top" src="<?= $product->getImage() ?>" alt="<?= $product->getCategory() ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product->getName() ?></h5>
                                    <div class="card-text">
                                        Contiene: <?= $product->listMaterials() ?> <br>
                                        Colore: <?= $product->getColor() ?>
                                    </div>
                                    <p class="card-text">Prezzo: €<?= $product->getPrice() ?></p>
                                    <p class="card-text"> <?= $product->getType() ?> <i class="fas fa-<?= $product->getIcon() ?>"></i></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <a href="http://localhost/">Torna indietro</a>
    </footer>
</body>

</html>