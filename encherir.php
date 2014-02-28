<!DOCTYPE html>
<html>
<head>
    <title>Site d'enchères - Ajouter Produit </title>
    <?php include("./include/Dependances.html") ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Enchérir" height="100" width="100%" name="panel" frameborder="0"></iframe>
<?php
include "./include/mysqlapi.inc.php";
session_start();
if (isset($_POST['montant'])) {
    insoffre($_POST['produit'],$_SESSION['userid'],$_POST['montant']);
    echo '<div class="hero-unit">
        <h1>Votre offre à été validé</h1>
        <a href="./index.php"><button class="btn btn-warning text-center">Revenir à l\'acceuil</button></a>
    </div>';
} else {
    echo '<div class="alert alert-error">
        <h1>Une erreur s\'est produite</h1>
        <a href="./index.php"><button class="btn btn-warning text-center">Revenir à l\'acceuil</button></a>
    </div>';
}
