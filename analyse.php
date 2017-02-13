<?php
//vérifier sur une page si les ingrédients conviennent
include 'params.inc.php';

if (!isset($_GET['id_produit']))
	die('pas d\'identifiant produit');
$produit=$_GET['id_produit'];
if (!ereg('^[0-9]+$',$id_produit)
	die('Erreur de format de l\'identifiant');
//analyse

//en utilisant curl plutôt que fopen et open_basedir
$ch = curl_init($url$ip_produit);
$fp = fopen('produit.html', "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

//$page=file($url$id_produit);
$page=file('produit.html');
$liste=array_search($exclure,$page);
//affichage
echo '<b>ingrédients exclus</b>';
echo '<pre>';
print_r($liste);
echo '</pre>';
?>
