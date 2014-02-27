<html>
<head>
    <title>Site d'enchères - Approvisionner </title>
    <?php include('./include/Dependances.html'); ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Approvisioner" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<?php
require_once('./stripe/config.php');
?>
<form action="verificationportem.php" method="post" >
    <div class="form-group">
        <div class="col-md-2 col-md-offset-2 text-center"></div>
        <div class="col-md-6 text-center"><label>montant :</label></div>
        <div class="col-md-6 text-center"><select class="form-control" name="montant">
                <option value="10">10.00 $</option>
                <option value="20">20.00 $</option>
                <option value="50">50.00 $</option>
                <option value="100">100.00 $</option>
                <option value="400">400.00 $</option>
            </select></div>
        <div class="col-md-6 text-center"><script src="https://checkout.stripe.com/checkout.js" class="stripe-button" id="bouton"
            data-key="<?php echo $stripe['publishable_key']; ?>"
            data-description="Approvisionner le porte-monnaie" ></script></div>
        <div class="col-md-2"></div>
    </div>
</form>
</body>
</html>