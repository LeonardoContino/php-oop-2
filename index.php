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

$food_cat = new Food('crocchette','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dm-drogeriemarkt.it%2Falmo-nature-crocchette-per-gatti-adulti-holistic-maintenance-con-pollo-e-tacchino-p8001154127539.html&psig=AOvVaw1tTCX6xNXxK05uTLrABxYy&ust=1677011337594000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKC6_Zr4pP0CFQAAAAAdAAAAABAF', $cats, 2, 'cibo');
$food_dog = new Food('crocchette','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.spesaonline24.it%2Fcane%2F1226-friskies-crocchette-per-cane-adulto-con-manzo-cereali-e-verdure-aggiunte-75kg&psig=AOvVaw0-8XLUS6Xb06l9xnq4hJBd&ust=1677011367675000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKi1tan4pP0CFQAAAAAdAAAAABAF', $dogs, 2.50, 'cibo');
$toy_dog = new Toy('osso','https://www.google.com/imgres?imgurl=https%3A%2F%2Fanimalmania.it%2Fvendita%2F3456-large_default%2Fchew-it-small-osso-curativo-cane.jpg&imgrefurl=https%3A%2F%2Fanimalmania.it%2Fvendita%2Figiene-orale-cane%2F1531-chew-it-small-osso-curativo-cane.html&tbnid=w3ITVoTHDz1a3M&vet=12ahUKEwi1-ZnQ-KT9AhVegaQKHXp1B8YQMygBegUIARCNAw..i&docid=U91T6_TmmLBtYM&w=458&h=458&q=osso%20came&ved=2ahUKEwi1-ZnQ-KT9AhVegaQKHXp1B8YQMygBegUIARCNAw', $dogs, 6, 'gioco');
$toy_cat = new Toy('pallina','https://www.google.com/aclk?sa=l&ai=DChcSEwjop_Tf-KT9AhUJx3cKHQ-QBx4YABABGgJlZg&sig=AOD64_2t1tH__5QonmRcxNdGzNo3bFkgYQ&adurl&ctype=5&ved=2ahUKEwjXv-nf-KT9AhUSP-wKHTEHCqoQvhd6BAgBEFA', $cats, 2, 'gioco');
$kennel_dog = new Kennel('casetta di legno','https://www.google.com/aclk?sa=l&ai=DChcSEwjop_Tf-KT9AhUJx3cKHQ-QBx4YABABGgJlZg&sig=AOD64_2t1tH__5QonmRcxNdGzNo3bFkgYQ&adurl&ctype=5&ved=2ahUKEwjXv-nf-KT9AhUSP-wKHTEHCqoQvhd6BAgBEFA', $dogs, 50, '3m x 3m');
$kennel_cat = new Kennel('casetta per gatti','https://www.google.com/aclk?sa=l&ai=DChcSEwi3z9P6-KT9AhXo_3cKHVqNAe4YABABGgJlZg&sig=AOD64_1ZzDEDWGq7d1UQxYvS6uN__9jh0Q&adurl&ctype=5&ved=2ahUKEwj47Mf6-KT9AhVDwwIHHbJpCDsQvhd6BAgBEFg', $cats, 30, '3m x 3m');

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
                <img src="<?=$product->image ?>" class="card-img-top" alt="<?=$product->name?>">
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