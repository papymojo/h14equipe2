<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 08:22
 */


function requete($sql) {
    mysql_connect('localhost', 'h14equipe2', 'h14equipe2')
    or die('Impossible de se connecter : ' . mysql_error());
    mysql_select_db('h14equipe2') or die('Impossible de sélectionner la base de données');

    // Exécution des requêtes SQL
    $result = mysql_query($sql) or die('Échec de la requête : ' . mysql_error());

    $resultat = array();
    $numligne = 0;

    while ($ligne = mysql_fetch_array($result)) {
        $resultat[$numligne] = $ligne;
        $numligne++;
    }
    return $resultat ;
}

function getpseudo($pseudo) {
    $resultat=requete('SELECT pseudo FROM utilisateurs WHERE pseudo=\''.$pseudo.'\';' );
    return $resultat ;
}

function getemail($email) {
    $resultat=requete('SELECT pseudo FROM utilisateurs WHERE email=\''.$email.'\';' );
    return $resultat ;
}

function getauth($pseudo,$mdp) {
    $resultat=requete('SELECT * FROM utilisateurs WHERE pseudo=\''.$pseudo.'\' AND password=\''.$mdp.'\';' );
    return $resultat ;
}

function insutilisateur($pseudo,$password,$email,$adresse,$codepostal,$telephone) {
    $resultat = requete("INSERT INTO utilisateurs (pseudo,password,email,adresse,codepostal,telephone,portemonaie) VALUES('"
                                .$pseudo."','".$password."','".$email."','".$adresse."','".$codepostal."','".$telephone."','.0)" );
    return $resultat;
}