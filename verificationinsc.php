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
    echo '<form action="./verificationinsc.php" method="post" onSubmit="return validation(this)">';
    echo '<label>Pseudonyme ........................:</label><input type="text" name="pseudo" maxlength="25"/>';
    echo '<input type="hidden" name="email" maxlength="50" value="'.$_POST['email'].'"/>';
    echo '<label>Mot de passe ......................:</label><input type="password" name="password" maxlength="25"/>';
    echo '<label>Vérification du mot de passe ......:</label><input type="password" name="verifpassword" maxlength="25"/>';
    echo '<input type="hidden" name="telephone" maxlength="25" value="'.$_POST['telephone'].'"/>';
    echo '<input type="hidden" name="adresse" rows="3" cols="50" value="'.$_POST['adresse'].'"/>';
    echo '<input type="hidden" name="codepostal" maxlength="10" value="'.$_POST['codepostal'].'"/>';
    echo '<input type="submit" name="Valider"/><input type="reset" name="Effacer"/>';
    echo '</form>';
} else {
    echo '<h2>Votre inscription est effective</h2>';
    insutilisateur($_POST['pseudo'],$_POST['password'],$_POST['email'],$_POST['adresse'],$_POST['codepostal'],$_POST['telephone']);
    echo '<a href=\'authentification.html\'><button>Se connecter</button></a>';
    echo '<a href=\'index.php\'><button>Retour</button></a>';
}
?>
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