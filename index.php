<?php
include("includes/header.php");

?>

<div class="row">

<?php

$produits = array_slice($mesProduits, 0, 3);

foreach($produits as $item) {
    cardProduit($item);
}

// var_dump($produits);

