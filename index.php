
<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 08:19
 */
session_start();
if (isset($_SESSION['userid'])){
    echo '<a href="deconnexion.php">Se déconnecter</a>';
} else {
    echo '<a href="authentification.html">Se connecter</a>';
}
