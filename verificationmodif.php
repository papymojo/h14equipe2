<!DOCTYPE html>
<html>
<head>
<head>
    <title>Site d'enchères - Page de connexion </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<title></title>
</head>
<body>
<iframe src="iframepanel.php?titre=inscription" height="100" width="100%" name="panel" frameborder="0"></iframe>
<?php
/**
 * Created by PhpStorm.
 * User: benjaminbercy
 * Date: 07/02/14
 * Time: 10:42
 */
include "./include/mysqlapi.inc.php";
session_start();
echo '<h2>La modification de votre compte a été effectuée</h2>';
updateutilisateur($_SESSION['userid'], $_POST['email'], $_POST['password'], $_POST['telephone'], $_POST['adresse'], $_POST['codepostal']);
echo "<a href='index.php'><button class='btn btn-warning'>Retour</button></a>";
?>
</body>
</html>
<script type="text/javascript">
</script>