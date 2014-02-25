<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Site d'enchères - Resultat pour <?php echo $_POST['achercher'] ?> </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Inscription" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<table><tr>
<?php
include "./include/mysqlapi.inc.php";
$resultat=moteurDeRecherche($_POST['achercher']);

$ligne=0;
foreach($resultat as $produit) {
    if ($ligne == 4){
       $ligne = 0;
       echo '</tr><tr>';
    }
    echo '<td>
        <div class="thumbnail">
            <img src="'.$produit[7].'"
                 alt="Generic placeholder thumbnail"
                 height="240"
                 width="240">
        </div>
        <div class="caption">
            <h3>'.$produit[1].'</h3>
            <p>Prix de départ: '.$produit[2].'<p>
            <p>
                <a href="ficheproduit.php?='.$produit[0].'" class="btn btn-primary" role="button">
                    Faire Une Proposition
                </a>
            </p>
        </div>
    </td>';
$ligne++;
}
?>
</table></tr>

</body>