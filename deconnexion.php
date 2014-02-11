<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 09:45
 */
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
</head>
<body>
<iframe src="iframepanel.php?titre=deconnection" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<h1>Vous êtes désormé deconnecté</h1>
<a href="./index.php"><button>Revenir à l'acceuil</button></a>
</body>
</html>