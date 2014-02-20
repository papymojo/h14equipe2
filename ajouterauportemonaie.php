<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Site d'enchères - Ajouter Produit </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Projet.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.0.3.min.js"></script>
</head>
<body>
<?php
require_once('./stripe/config.php');
?>
<form action="verificationportem.php" method="post" >
    <label>montant :</label>
    <input type="number" id="montant" name="montant" >
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" id="bouton"
            data-key="<?php echo $stripe['publishable_key']; ?>"
            data-description="Approvisionner le Porte Monaie" ></script>
</form>
</body>
</html>