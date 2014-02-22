<!DOCTYPE html>
<html>
<head>
<head>
    <title>Site d'enchères - Page de connexion </title>
    <?php include('./include/Dependances.html'); ?>
</head>
    <title></title>
</head>
<body>
<iframe src="iframepanel.php?titre=inscription" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 10:42
 */
include "./include/mysqlapi.inc.php";
$dispo = getpseudo($_POST['pseudo']);
if (!empty($dispo)) {
    echo '<script type="text/javascript">alert("Le pseudonyme '.$_POST['pseudo'].' est déjà utilisé !")</script>';
    echo "<div class='row'>";
        echo "<div class='col-md-8 col-md-offset-2'>";
            echo "<div class='panel panel-default'>";
                 echo "<div class='panel-body'>";
                    echo "<div class='row'></div>";
                        echo '<form action="./verificationinsc.php" method="post" onSubmit="return validation(this)">';
                            echo "<div class='form-group'>";
                               echo "<div class='col-lg-10 text-center'><input class='form-control' type='text' id='pseudo' name='pseudo' maxlength='25' required='required' placeholder='Entrer votre pseudonyme ici'/></div>";
                                echo "<div class='col-md-2'></div>";
                            echo "</div>";
                                 echo '<input type="hidden" name="email" maxlength="50" value="'.$_POST['email'].'"/>';

                                echo "<div class='form-group'>";
                                echo "<div class='col-lg-10 text-center'><input class='form-control' type='password' id='password' name='password' maxlength='25' required='required' placeholder='Entrer votre mot de passe ici'/></div>";
                                echo "<div class='col-md-2'></div>";
                                echo "</div>";

                                echo "<div class='form-group'>";
                                echo "<div class='col-md-10 text-center'><input class='form-control' type='password' id='verifpassword' name='verifpassword' maxlength='25' required='required' placeholder='Confirmer le mot de passe'/></div>";
                                echo "<div class='col-md-2'></div>";
                                echo "</div>";

                 echo "</div>";
            echo "</div>";
         echo "</div>";
    echo "</div>";

    echo '<input type="hidden" name="telephone" maxlength="25" value="'.$_POST['telephone'].'"/>';
    echo '<input type="hidden" name="adresse" rows="3" cols="50" value="'.$_POST['adresse'].'"/>';
    echo '<input type="hidden" name="codepostal" maxlength="10" value="'.$_POST['codepostal'].'"/>';
    echo "<div class='form-group'>";
        echo "<div class='col-md-offset-4 col-md-8 text-center'>";
            echo"<button type='submit' name='Valider' class='btn btn-success  text-center'>Envoyer</button>";
            echo" <button type='reset' name='Effacer' class='btn btn-danger  text-center'>Effacer</button>";
    echo "</div>";
    echo "</div>";
    echo '</form>';
} else {
    echo '<h2>Votre inscription est effective</h2>';
    insutilisateur($_POST['pseudo'],$_POST['password'],$_POST['email'],$_POST['adresse'],$_POST['codepostal'],$_POST['telephone']);
    echo "<a href=\'authentification.html\'><button class='btn btn-success'>Se connecter</button></a>";
    echo "<a href=\'index.php\'><button class='btn btn-warning'>Retour</button></a>";

}
?>
</body>
</html>
<script type="text/javascript">
    function validation(f) {
        if (f.verifpassword.value!= f.password.value ) {
            alert('Problème de mot de passe');
            return false;
        }
        if (f.verifpassword.value.length <= 7 ){
            alert('Le mot de passe doit contenir au moins 7 caractères');
            return false;
        }
        if (f.pseudo.value.length <= 4 ){
            alert('Le pseudonyme doit contenir au moins 4 caractères');
            return false;
        }
        return true;
    }
</script>