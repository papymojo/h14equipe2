<?php
session_start();
require_once('./stripe/config.php');

$token  = $_POST['stripeToken'];

$customer = Stripe_Customer::create(array(
    'email' => $_SESSION['email'],
    'card'  => $token
));

$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount'   => $_POST['montant']*100,
    'currency' => 'cad'
));
include("./include/mysqlapi.inc.php");
echo '<h1>Vous avez ajouté '.$_POST['montant'].'$ à votre Porte Monaie </h1>';
$_SESSION['argent'] = aprovisionner($_SESSION['pseudo'],$_POST['montant']);
?>
