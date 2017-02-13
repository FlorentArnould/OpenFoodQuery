<?php
//vérifier sur une page si les ingrédients conviennent
//paramètres
$exclure=('porc','E604','ascorbate');
$url='https://fr.openfoodfacts.org/produit/3166350006271/tagliatelles-a-la-carbonara-marie';
if (!isset($_GET['id_produit']))
	die('pas d\'identifiant produit');
$produit=$_GET['id_produit'];
if (!ereg('^[0-9]+$',$id_produit)
	die('Erreur de format de l\'identifiant');
//analyse
$page=file($url$id_produit);
$liste=array_search($exclure,$page);
//affichage
echo 'ingrédients exclus';
print_r($liste);
?>
