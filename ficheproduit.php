<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <?php
    include "./include/mysqlapi.inc.php";
    $produit = getproduit($_GET['id']);
    session_start();
    ?>
    <title>Site d'enchères - Fiche Produit : <?php echo $produit[2]; ?> </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<body>
<iframe src="iframepanel.php?titre=<?php echo $produit[2]; ?>" height="100" width="100%" name="panel" frameborder="0"></iframe>
<center><div id="panel" class="hero-unit text-center">
            <h1><?php echo $produit[2];
                if ($produit[6]) echo '<img src="./images/vendu.png" width="340" height="240" style="position: absolute; top:200px; left:35%;">'?></h1></br>
            <img src="<?php echo $produit[8]; ?>" width="400" height="240" class="img-rounded"></br></br>

        <h2 class="alert-info">Informations : </h2>
            Prix de départ : <?php echo number_format($produit[3], 2, ',', ' ') . "$" ?></br>
            Mise en vente : <?php echo date('d/m/Y', $produit[4]) ?></br>
            Fin de l'offre
                    : <?php echo date('d/m/Y', strtotime('+' . $produit['5'] . 'day', $produit[3])); ?></br></br>
                <h2 class="alert-info">Description : </h2><br/> <?php echo $produit[7] . "<br/>" ?>
                <h2 class="alert-info">Etat : </h2><br/> <?php echo $produit[9] . "<br/>" ?>
                <?php if (isset($_SESSION['userid']) && !$produit[6]) {
                    $meilleureOffre = getMeilleureOffre($produit[0]);
                    if (!isset($meilleureOffre[4])) {
                        $meilleureOffre[4] = $produit[3];
                    }
                    echo '
                    <h2 class="alert-info">Prix actuel : </h2></br></br>
                    <form class="form-inline action="encherir.php" method="POST" onSubmit="return verif(this)" id="encherir">
                    <input type="number" name="montant" id="montant" value="'.$meilleureOffre[4].'">
                    <input type="hidden" name="produit" value='.$produit[0].' >
                    <input type="hidden" name="valeurpardefaut" value="';
                    echo $meilleureOffre[4];
                    echo '">
                    <input type="button" name="ajouter" class="btn btn-info" onclick="f_ajouter(encherir)" value="ajouter 1$">
                    <input type="button" name="reset" class="btn btn-danger"onclick="f_reset(encherir)" value="réinitialiser">
                    <input type="submit" class="btn btn-success" value="enchérir">
                    </form>';
                } ?>
            </div></center>
<script language="JavaScript">
    function f_ajouter(f) {
        f.montant.value = parseFloat(f.montant.value)+ 1.00;
        return 0;
    }
    function f_reset(f) {
        f.montant.value = f.valeurpardefaut.value;
        return 0;
    }
    function verif(f) {
        if (f.montant.value <= f.valeurpardefaut.value) {
            alert("Vous devez faire une offre supérieure à l'offre précédante.");
            return false;
        } else {
            return true;
        }
    }
</script>
</body>
</html>
