<?php
$catalogue = [
  "aaa" => [ "desc" => "Produit A", "prixUnitaire" => 100.45 ],
  "abb" => [ "desc" => "Produit B", "prixUnitaire" => 2.56 ],
  "zzx" => [ "desc" => "Produit Z", "prixUnitaire" => 45.67 ],
];

$commande = [
  [ "sku" => "aaa", "qte" => 2 ],
  [ "sku" => "abb", "qte" => 10 ],
];
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Exercice 2 INF3190">
    <title>Facture</title>
  </head>
  <body>
      <table>
          <thead>
              <tr>
                  <th>Description</th>
                  <th>Quantité</th>
                  <th align="right">Prix</th>
              </tr>

          </thead>
          <tbody>
              <?php
              $sousTotal = 0.0;
              ?>
              <?php foreach($commande as $ligneCommande): ?>
              <?php 
              $produit = $catalogue[$ligneCommande["sku"]];
              $prix = $ligneCommande["qte"] * $produit["prixUnitaire"];
              $sousTotal += $prix;
             ?>
             
             <tr>
                 <td><?= $produit["desc"] ?></td>
                 <td><?= $ligneCommande["qte"]?></td>
                 <td align="right"><?= sprintf("%0.2f", $prix) ?></td>

             </tr>
             <?php endforeach; ?>
            

          </tbody>
          <tfoot>
              <tr>
                  <th>Sous-total</th>
                  <th></th>
                  <th align="right"><?= sprintf("%0.2f", $sousTotal) ?></th>
              </tr>
              <tr>
                  <th>Taxes</th>
                  <th></th>
                  <th align="right"><?= sprintf("%0.2f", $sousTotal * 0.15) ?></th>
              </tr>
              <tr>
                  <th>Taxes</th>
                  <th></th>
                  <th align="right"><?= sprintf("%0.2f", $sousTotal * 1.15) ?></th>
              </tr>


          </tfoot>

      </table>
      

  </body>
</html>