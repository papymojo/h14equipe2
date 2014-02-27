<?php
include "./include/mysqlapi.inc.php";
$produit = getproduit($_GET['id']);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Site d'enchères - Fiche Produit : <?php echo $produit[2]; ?> </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Inscription" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<table><tr><td>
<h1><?php echo $produit[2] ;
    if ( $produit[6]==1 ) echo '<img src="./images/vendu.png" width="340" height="240" style="position: absolute; top:200px; left:10px;">'?></h1>
<img src="<?php echo $produit[8] ;?>" width="400" height="240" class="img-rounded">
<h2>Prix de départ : <?php echo number_format($produit[3],2,',',' ')."$" ?></h2>
</td><td><div class="hero-unit">
<h2>Mise en vente : <?php echo date( 'd/m/Y',$produit[4]) ?> </h2>
<h2>Fin de l'offre : <?php echo date('d/m/Y', strtotime('+'.$produit['5'].'day', $produit[3] ));?></h2>
<p>Description : <br/> <?php echo $produit[7]."<br/>"?></p>
<p>Etat : <br/> <?php echo $produit[9]."<br/>"?></p>
</div>
</td></tr></table>
