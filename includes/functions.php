<?php 

/**
 * @var float $prix
 * @return float
 * 
 */

function prixHT($prix) {
    return number_format($prix/1.2, 2, ",", " ");
}


/**
 * @var array $produit
 * @return void Ce void indique qu'il s'agit d'une procédure, et non d'une fonction. void indique qu'elle ne retourne rien, même pas null !
 */



function afficheProduit($produit) {
    if($produit["price"] <= 12) {
        $color = "green";
    } else {
        $color = "blue";
    }

    echo '
      <tr>
        <td><img src="../images/' . $produit["image"] . '" alt=""></td>
        <td>' . $produit[PRODUCT_NAME] . '</td>
        <td>' . $produit["price"] . '</td>
        <td>' . $produit["description"] .' </td>
      </tr>
    ';
}


/**
 * @param $produit
 * @return void
 */




function cardProduit($produit) {
  echo '<div class="card col-md-4 col-sm-12">
  <img class="card-img-top" src="images/' . $produit['image'] . '" alt="Card image cap" style="max-width: 10rem;">
  <div class="card-body bg-success">
    <h5 class="card-title">' . $produit[PRODUCT_NAME] . '</h5>
    <p class="card-text h-auto">' . $produit["description"] . '</p>
  </div>
</div>';
}

