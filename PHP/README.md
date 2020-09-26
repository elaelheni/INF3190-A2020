# PHP
Le but de cet atelier est de mettre en pratique les bases de PHP.

## Installation
Il vous est demandé d'installer une version stable de PHP7.x .
Pour cet atelier, on va installer la version 7.4.10, les liens de téléchargement sont disponibles [ici](https://www.php.net/downloads.php).

## Objectifs 
- Apprivoiser le PHP

## Exercices 
À partir des structures de données représentant une commande et un catalogue de produits, écrivez un programme qui produit une facture HTML.

Les structures de données à copier-coller dans votre programme PHP:

    $catalogue = [
     "aaa" => [ "desc" => "Produit A", "prixUnitaire" => 100.45 ],
     "abb" => [ "desc" => "Produit B", "prixUnitaire" => 2.56 ],
     "zzx" => [ "desc" => "Produit Z", "prixUnitaire" => 45.67 ],
    ];

    $commande = [
     [ "sku" => "aaa", "qte" => 2 ],
     [ "sku" => "abb", "qte" => 10 ],
    ];

- Le programme PHP doit produire un document HTML valide. La facture HTML doit être représentée sous la forme d'un tableau.

**Note** : Pour valider votre HTML utilisez le [validateur du W3C](https://validator.w3.org/#validate_by_input)

- Chaque ligne de la facture représentant un item de la commande devrait contenir la description du produit, la quantitée commandée et le prix total pour cet article.

- Les dernières lignes du tableau devraient indiquer le sous-total, le montant des taxes (15%) et le montant total.

- Les fonctions sprintf ou printf pourraient être utiles lors de l'affichage des montants (http://php.net/manual/en/function.sprintf.php).

