<?php

session_start();
session_destroy();
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Projet.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.0.3.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<iframe src="iframepanel.php?titre=Déconnexion" height="100" width="100%" name="panel" frameborder="0" ></iframe>
    <div class="hero-unit">
        <h1>Vous êtes désormais déconnecté</h1>
        <a href="./index.php"><button class="btn btn-warning text-center">Revenir à l'accueil</button></a>
    </div>
</body>
</html>



