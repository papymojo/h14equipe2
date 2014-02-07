<head>
    <base target="_parent" />
</head>
<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 13:15
 */
session_start();
echo '<h1>'.$_GET['titre'].'</h1>';

if (isset($_SESSION['userid'])){
    echo '<h2>'.$_SESSION['pseudo'].'</h2>';
    echo '<a href=\'deconnexion.php\'" target="_parent"><button>Se déconnecter</button></a>';
} else {
    echo '<a href=\'authentification.html\'><button>Se connecter</button></a>';
    echo '<a href=\'inscription.html\'><button>S\'inscrire</button></a>';
}
