<?php

session_start();
session_destroy();
?>
<html>
<head>
    <?php include('./include/Dependances.html'); ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Déconnection" height="100" width="100%" name="panel" frameborder="0" ></iframe>
    <div class="hero-unit">
        <h1>Vous êtes désormais déconnecté</h1>
        <a href="./index.php"><button class="btn btn-warning text-center">Revenir à l'acceuil</button></a>
    </div>
</body>
</html>



