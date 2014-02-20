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
 * Time: 08:36
 */
session_start();
include "./include/mysqlapi.inc.php";
$auth =getauth($_POST['pseudo'],$_POST['password']);
if (!empty($auth)) {
    $_SESSION['pseudo']= $_POST['pseudo'];
    $_SESSION['userid']= $auth[0][0];
    $_SESSION['argent']= $auth[0][7];
    $_SESSION['email'] = $auth[0][3];
    header('location:./index.php');errors/authfailed.html;
} else {
    header('location:./errors/authfailed.html');
}
?>
</form>
</body>
</html>
