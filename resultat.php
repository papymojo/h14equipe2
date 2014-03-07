<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Site d'enchères - Resultat pour <?php echo $_POST['achercher'] ?> </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Inscription" height="80" width="100%" name="panel" frameborder="0"></iframe>
<center>
    <div style="height: 500px; width: 90%; overflow: auto; background-color:white; border-radius: 10px; ">
        <table class="text-center"
        ">
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
                echo '<td><div';
                if ($produit[6]) {
                    echo ' class="alert-danger"';
                } else {
                    echo ' class="alert-info"';
                }
                echo ' style="padding:20px; margin:20px; border-radius: 10px;">
        <div  style="position : relative; height:200px; width:200px;overflow:auto; ">
            <img class="img-rounded" src="' . $produit[8] . '"
                 alt="' . $produit[2] . '"
                 style="height:160px; width:200px">
        </div>';

                echo '<div class="caption">
            <h3>' . substr($produit[2], 0, 12) . '</h3>
            <p>Prix de départ: ' . $produit[3] . '</p>
            <p>';
                if ($produit[6]) {
                    echo '<a href="ficheproduit.php?id=' . $produit[0] . '" class="btn btn-danger" role="button">Vendu!!!</a>
            </p>';
                } else {
                    echo '<a href="ficheproduit.php?id=' . $produit[0] . '" class="btn btn-primary" role="button">
                    Voir ça de plus près</a>';
                }
                echo '</div></div>
    </td>';
                $ligne++;
            }
            ?>
        </tr>
        </table></div>
</center>

</body>