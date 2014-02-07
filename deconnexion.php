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
</head>
<body>
<iframe src="iframepanel.php?titre=deconnection" height="100" name="panel"></iframe>
<h1>Vous êtes désormé deconnecté</h1>
<a href="./index.php"><button>Revenir à l'acceuil</button></a>
</body>
</html>