<!DOCTYPE html>
<html>
<head>
    <?php include('./include/Dependances.html'); ?>
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
$dossier = './images/produits/'.rand(-2147483648,2147483647).'/';
$id = insproduit($_POST['nom'],$_POST['prix'],$_POST['duree'],mysql_real_escape_string($_POST['description']),mysql_real_escape_string($dossier.$_POST['nom'].'.jpg'),mysql_real_escape_string($_POST['etat']));
if(isset($_FILES['image']))
{
    $extensions = array('.jpeg','.jpg');
    if (in_array(strrchr($_FILES['image']['name'], '.'), $extensions)) {
    mkdir($dossier);
    move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $_POST['nom'].'.jpg');
    } else {
        echo '<h2>Fichier image incorrect , aucune image ne seras utilisé.</h2>' ;
    }
}

?>
<h2>Le Produit à été mis en vente</h2>
<a href='index.php'><button>Retour</button></a>
</body>
</html>
