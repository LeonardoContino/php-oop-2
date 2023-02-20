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

$food_cat = new Product('crocchette', $cats, 2, 'cibo');
$food_dog = new Product('crocchette', $dogs, 2, 'cibo');
$toy_dog = new Product('osso', $dogs, 2, 'gioco');
$toy_cat = new Product('pallina', $cat, 2, 'gioco');
$kennel_dog = new Product('casetta di legno', $dogs, 2, '3m x 3m');
$kennel_cat = new Product('casetta di legno', $cat, 2, '3m x 3m');

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
    
</body>
</html>