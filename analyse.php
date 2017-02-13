<?php
//vérifier sur une page si les ingrédients conviennent
//paramètres
$exclure=('porc','E604','ascorbate');
$url='https://fr.openfoodfacts.org/produit/3166350006271/tagliatelles-a-la-carbonara-marie';
//analyse
$page=file($url);
$liste=array_search($exclure,$page);
//affichage
echo 'ingrédients exclus';
print_r($liste);
?>
