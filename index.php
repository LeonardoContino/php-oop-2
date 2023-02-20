<!-- -- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- Tra i prodotti, troviamo cibo, giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
 icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc). -->

<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Kennel.php';
require_once __DIR__ . '/models/Categories.php';




$cats = new Categories('cats');
$dogs = new Categories('dogs');

// prodotti

$food_cat = new Food('crocchette','https://shop-cdn-m.mediazs.com/bilder/x/kg/almo/nature/holistic/crocchette/cane/7/400/icon_percent_template_1000x1000_int_1__7.jpg', $cats, 2, 'cibo');
$food_dog = new Food('crocchette','https://shop-cdn-m.mediazs.com/bilder/royal/canin/digestive/care/crocchette/per/gatti/6/400/icon_topseller_1_2021_12_28t145443_494_6.jpg', $dogs, 2.50, 'cibo');
$toy_dog = new Toy('osso','https://shop-cdn-m.mediazs.com/bilder/nylabone/osso/annodato/al/gusto/di/manzo/per/cani/1/400/225398_pla_nylabone_rohhautknochen_rindfleischgeschmack_hs_04_1.jpg', $dogs, 6, 'gioco');
$toy_cat = new Toy('pallina','https://shop-cdn-m.mediazs.com/bilder/palline/in/lana/cosma/1/400/85434_pla_cosma_wollbaelle_fg_1671_1.jpg', $cats, 2, 'gioco');
$kennel_dog = new Kennel('casetta di legno','https://m.media-amazon.com/images/I/71nf1O2IBML._AC_SX679_.jpg', $dogs, 50, '3m x 3m');
$kennel_cat = new Kennel('casetta per gatti','https://m.media-amazon.com/images/I/810NQPqAv5L._AC_SY300_SX300_.jpg', $cats, 30, '3m x 3m');

$products =[$food_cat, $food_dog, $toy_cat, $toy_dog, $kennel_cat, $kennel_dog];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
    <section class="container text-center m-5">
        <h1>E-COMMERCE FOR ANIMALS</h1>
    </section>
    <section class="container">
        <div class="row">
           <?php foreach($products as $product) :?> 
            <div class="col-4 p-3">
                <div class="card p-3">
                <img src="<?=$product->image?>" class="card-img-top" alt="<?=$product->name?>">
                    <div class="card-body">
                    <h5 class="card-title">Nome Prodotto: <?= $product->name ?></h5>
                    <p class="card-text">Categoria: <?= $product->categories->name ?></p>
                    <p class="card-text">Prezzo: <?= $product->price ?>€</p>
                    <?php if ($product instanceof Food) : ?>
                    <p class="card-text"> Tipo prodotto: <?= $product->datails_food ?></p>
                    <?php endif; ?>
                    <?php if ($product instanceof Toy) : ?>
                    <p class="card-text"> Tipo prodotto: <?= $product->type ?></p>
                    <?php endif; ?>
                    <?php if ($product instanceof Kennel) : ?>
                    <p class="card-text"> Grandezza: <?= $product->size ?></p>
                    <?php endif; ?>
                    


                    </div>

                </div>
            </div>
           <?php endforeach; ?> 
        </div>
        

    </section>
</body>
</html>