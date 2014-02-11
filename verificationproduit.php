<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<iframe src="iframepanel.php?titre=Ajout d'un Produit" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 10:42
 */
include "./include/mysqlapi.inc.php";
insproduit($_POST['nom'],$_POST['prix'],$_POST['duree'],$_POST['description'],$_POST['etat']);
if(isset($_FILES['avatar']))
{
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $dossier = 'img/produit/';
    $fichier = $_POST['nom'].'.jpg';
    if (in_array(strrchr($_FILES['image']['name'], '.'), $extensions)) {
    move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier);
    }
}
?>
<h2>Le Produit à été mis en vente</h2>
<a href=\'index.php\'><button>Retour</button></a>
</body>
</html>
