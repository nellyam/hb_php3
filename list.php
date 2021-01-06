<?php
include("includes/header.php");
require_once("includes/vars.php");
require_once("includes/functions.php");
?>

<table>
  <tr>
     <th>Nom du produit</th>
     <th>Price</th>
     <th>Description</th>
  </tr>

  <?php
     foreach($mesProduits as $bonnet) {
        afficheProduit($bonnet);
     }
  ?>
</table>

<?php
include("includes/footer.php");