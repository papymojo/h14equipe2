<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 08:22
 */


function requete($sql)
{
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
    return $resultat;
}

function getpseudo($pseudo)
{
    $resultat = requete('SELECT pseudo FROM utilisateurs WHERE pseudo=\'' . $pseudo . '\';');
    return $resultat;
}

function getemail($email)
{
    $resultat = requete('SELECT pseudo FROM utilisateurs WHERE email=\'' . $email . '\';');
    return $resultat;
}

function getauth($pseudo, $mdp)
{
    $resultat = requete('SELECT * FROM utilisateurs WHERE pseudo=\'' . $pseudo . '\' AND password=\'' . $mdp . '\';');
    return $resultat;
}

function insutilisateur($pseudo, $password, $email, $adresse, $codepostal, $telephone)
{
    $resultat = requete("INSERT INTO utilisateurs (pseudo,password,email,adresse,codepostal,telephone,portemonaie) VALUES('"
        . $pseudo . "','" . $password . "','" . $email . "','" . $adresse . "','" . $codepostal . "','" . $telephone . "',0)");
    return $resultat;
}

function insproduit($nom, $prix, $duree, $description, $image, $etat)
{
    requete("INSERT INTO produit (proprietaire,nom,prixdedepart,date,duree,vendu,description,image,etat) VALUES("
        . $_SESSION['userid'] . ",'" . $nom . "'," . $prix . ",SYSDATE()," . $duree . ",0,'" . $description . "','" . $image . "','" . $etat . "')");
    $resultat = requete("SELECT id FROM produit WHERE nom = '" . $nom . "' AND date = '" . $duree . "'AND description = '" . $description . "'");
    return $resultat[0][0];
}

function aprovisionner($pseudo, $montant)
{
    requete("UPDATE utilisateurs SET portemonaie = portemonaie + " . $montant . " WHERE pseudo ='" . $pseudo . "' ;");
    $resultat = requete("SELECT portemonaie FROM utilisateurs WHERE pseudo = '" . $pseudo . "'");
    return $resultat[0][0];
}

function moteurDeRecherche($motclee)
{
    $req = "SELECT * FROM produit WHERE 0=1 ";
    $mots = explode(' ', $motclee);
    foreach ($mots as $mot) {
        $req .= "OR description LIKE '%" . $mot . "%' OR nom LIKE '%" . $mot . "%'";
    }
    $req .= " ORDER BY date DESC ";
    return requete($req);
}

function carousel()
{
    $resultat = requete("SELECT * FROM produit ORDER BY date LIMIT 5");
    $chaine = "<div class=\"item active text-center\"><center><a  href=ficheproduit.php?id='" . $resultat[0][0] . "' ><img class=\"img-rounded\" src = '" . $resultat[0][8] . "' style='height:600px; width:800px;'></a></center><h2>" . $resultat[0][2] . "</h2></div>";
    for ($i = 1; $i < 5; $i++) {
        $chaine .= "<div class=\"item text-center\"><center><a  href=ficheproduit.php?id='" . $resultat[$i][0] . "' ><img class=\"img-rounded\" src = '" . $resultat[$i][8] . "'  style='height:600px; width:800px;'></a></center><h2>" . $resultat[$i][2] . "</h2></div>";
    }
    return $chaine;
}

function getProduit($id)
{
    $resultat = requete("SELECT * FROM produit WHERE id=" . $id . "");
    return $resultat[0];
}

function getMeilleureOffre($id)
{
    $resultat = requete("SELECT * FROM offres WHERE fkproduit='" . $id . "' ORDER BY montant DESC");
    return $resultat[0];
}

function insoffre($produit, $utilisateur, $montant)
{
    $resultat = requete("INSERT INTO offres (fkutilisateurs,fkproduit,date,montant) VALUE(" . $utilisateur . "," . $produit . ",SYSDATE()," . $montant . ")");
    return $resultat;
}

function getinfouser($id) {
    $resultat = requete("SELECT * FROM utilisateurs WHERE id = ".$id."");
    return $resultat[0];
}