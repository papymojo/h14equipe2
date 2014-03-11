<?php
include("./include/mysqlapi.inc.php");
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


echo "start cron task";
$debut = '<html><body>';

$fin = '</html></body>';

$donnees = getventes();

foreach ($donnees as $vente) {
    $message = $debut;
    $message .= "<h1>Bonjour cher/chère " . $vente[16] . "</h1>";
    if ($vente[4] < $vente[22]) {
        $message .= "<p>Vous êtes l'heureux propriétaire de l'article suivant :" . $vente[7] . "</p>";
        $mesage .= "<p>Votre compte à été débité du montant suivant :" . number_format($vente[4], 2, ",", " ") . "$</p>";
    } else {
        $message .= "<p>Un défaut de payment c'est produit lors de la validation  de votre proposition d'achat : </p>";
        $message .= "<p>Votre compte : " . number_format($vente[22], 2, ",", " ") . "$</p>";
        $message .= "<p>Montant de votre offre : " . number_format($vente[4], 2, ",", " ") . "$</p>";
        $message .= "<p>afin de remedier à ce problème veuillez vous connecter et rembourser votre dette .</p>";
    }
    $message .= $fin;
    mail($vente[18], "Votre offre à été validé", $message, $headers);
    echo $message;
    echo "<br/>";
}
updateventes();
echo "end of cron";