<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Site d'enchères - Resultat pour <?php echo $_POST['achercher'] ?> </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Inscription" height="100" width="100%" name="panel" frameborder="0"></iframe>
<table>
    <tr>
        <?php
        include "./include/mysqlapi.inc.php";
        $resultat = moteurDeRecherche($_POST['achercher']);

        $ligne = 0;
        foreach ($resultat as $produit) {
            if ($ligne == 4) {
                $ligne = 0;
                echo '</tr><tr>';
            }
            echo '<td>
        <div class="thumbnail" style="position : relative;">
            <img src="' . $produit[8] . '"
                 alt="' . $produit[2] . '"
                 height="240"
                 width="240">
        </div>';
            if ($produit[6] == 1) echo '<img src="./images/vendu.png" height="140" width="220"
        style="position : relative ;margin: -240px; left:260px; top : -160px;">';
            echo '<div class="caption">
            <h3>' . $produit[2] . '</h3>
            <p>Prix de départ: ' . $produit[3] . '<p>
            <p>
                <a href="ficheproduit.php?id=' . $produit[0] . '" class="btn btn-primary" role="button">
                    Voir ça de plus près
                </a>
            </p></div>
    </td>';
            $ligne++;
        }
        ?>
</table>
</tr>

</body>