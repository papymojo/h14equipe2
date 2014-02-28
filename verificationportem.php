<html>
<head>
    <title>Site d'enchères - Approvisionner </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<body style="text-align: center">
<iframe src="iframepanel.php?titre=Approvisioner" height="100" width="100%" name="panel" frameborder="0"></iframe>
<?php
session_start();
require_once('./stripe/config.php');

$token = $_POST['stripeToken'];

$customer = Stripe_Customer::create(array(
    'email' => $_SESSION['email'],
    'card' => $token
));

$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount' => $_POST['montant'] * 100,
    'currency' => 'cad'
));
include("./include/mysqlapi.inc.php");
echo '<h1>Vous avez ajouté ' . $_POST['montant'] . '$ à votre Porte Monaie </h1>';
$_SESSION['argent'] = aprovisionner($_SESSION['pseudo'], $_POST['montant']);
?>
<a href='index.php'>
    <button class="btn btn-warning">Retour</button>
</a>
</body>
</html>
