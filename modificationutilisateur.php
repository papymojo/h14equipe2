<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Site d'enchères - Page de connexion </title>
    <?php include("./include/Dependances.html") ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Modification" height="100" width="100%" name="panel" frameborder="0"></iframe>
<?php
include("./include/mysqlapi.inc.php");
session_start();
$utilisateur = getinfouser($_SESSION['userid']);
?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">&nbsp;</div>
                <div class="row"></div>
                <form action="./verificationmodif.php" style="text-align: center" method="post"
                      onSubmit="return validation(this)">
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-2 text-center"></div>
                        <div class="col-md-6 text-center"><input class="form-control" type="text" id="pseudo"
                                                                 name="pseudo" required="required" readonly
                                                                 value='<?php echo $utilisateur[1] ?>' maxlength="25"/>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-2 text-center"></div>
                        <div class="col-md-6 text-center"><input class="form-control" type="text" id="email"
                                                                 name="email" required="required"
                                                                 value='<?php echo $utilisateur[3] ?>'
                                                                 maxlength="50"/></div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-2 text-center"></div>
                        <div class="col-md-6 text-center"><input rel="drevil" class="form-control" type="password" id="password"
                                                                 name="password" required="required"
                                                                 placeholder="Mot de passe" maxlength="25"/></div>
                        <div class="col-md-2"></div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2 text-center"></div>
                            <div class="col-md-6 text-center"><input class="form-control" type="password"
                                                                     id="verifpassword" name="verifpassword"
                                                                     required="required"
                                                                     placeholder="Confirmation du mot de passe"
                                                                     maxlength="25"/></div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2 text-center"></div>
                            <div class="col-md-6 text-center"><input class="form-control" type="text" id="telephone"
                                                                     name="telephone" required="required"
                                                                     value='<?php echo $utilisateur[6] ?>'
                                                                     maxlength="25"/>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2 text-center"></div>
                            <div class="col-md-6 text-center"><textarea class="form-control" type="text" id="adresse"
                                                                        name="adresse" maxlengt="" row="2" cols="30.5"
                                                                        required="required"
                                                                        maxlength="500"/><?php echo $utilisateur[4] ?></textarea>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2 text-center"></div>
                            <div class="col-md-6 text-center"><input class="form-control" type="text" id="codepostal"
                                                                     name="codepostal" required="required"
                                                                     value='<?php echo $utilisateur[5] ?>'
                                                                     maxlength="25"/></div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-8 text-center">
                                <button class="btn btn-success  text-center">Valider</button>
                                <button type="reset" name="Effacer" class="btn btn-danger  text-center">Effacer</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<script type="text/javascript">
    function validation(f) {
        var ck_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var ck_tel = /^(?:\+?\d{3}[ -]?\d{3}[ -]?\d{4})$/;
        var ck_post = /^(([a-zA-Z])\d([a-zA-Z])(.?)\d([a-zA-Z])\d)$/;
        if (!ck_email.test(f.email.value)) {
            alert('Le format de l\'email est incorrect');
            return false;
        }
        if (!ck_tel.test(f.telephone.value)) {
            alert('Le format du numero de téléphone est incorrect');
            return false;
        }
        if (!ck_post.test(f.codepostal.value)) {
            alert('Le format du codepostal est incorrect');
            return false;
        }
        if (f.verifpassword.value != f.password.value) {
            alert('Problème de mot de passe');
            return false;
        }
        if (f.verifpassword.value.length <= 7) {
            alert('Le mot de passe doit contenir au moins 7 caractères');
            return false;
        }
        if (f.adresse.value.length <= 10) {
            alert('Il est conseillé d\'indiquer votre adresse afin de faciliter la livraison');
        }
        return true;
    }

    $(document).ready(function() {
        $("[rel=drevil]").popover({
            placement : 'left',
            html: 'true',
            content: "Si vous voulez conserver votre mot de passe actuel, vous devez le ressaisir, sinon c'est ici que vous le changez"
        });
    });



</script>