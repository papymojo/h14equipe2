<!DOCTYPE html>
<html>
<head>
    <title>Site d'enchères - Ajouter Produit </title>
    <?php include("./include/Dependances.html") ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Nouveau Produit" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<head>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<form action="./verificationproduit.php" method="post" onSubmit="return validation(this)" enctype="multipart/form-data">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">&nbsp;</div>
                <div class="row"></div>
                <form action="./verificationauth.php" method="post">
                    <div class="form-group">
                        <div class="col-md-6 text-center"><input class="form-control" type="text" id="nom" name="nom" maxlength="25" required="required" placeholder="Écrire le nom du produit ici"/></div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 text-center"><input class="form-control" type="text" id="prix" name="prix" maxlength="10" required="required" placeholder="Écrire le prix de départ ici"/></div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 text-center"><input class="form-control" type="text" id="duree" name="duree" maxlength="10" required="required" placeholder="Écrire la durée de l'offre (jours)""/></div>
                        <div class="col-md-2"></div>
                        <div class="row">&nbsp;</div>
                        <div class="row">&nbsp;</div>
                        <div class="row">&nbsp;</div>
                    </div>
                    <center><div id="ck">
                        <div class="form-group">
                            <label class="text-center bold">Écrire la description ci-dessous</label>
                            <div class="col-md-6 text-center"><textarea class="ckeditor" name="description"  placeholder="Écrire la description ici" rows="10" cols="25"></textarea></div>
                            <div class="col-md-2"></div>
                            <div class="row">&nbsp;</div>
                            <div class="row">&nbsp;</div>
                        </div>

                        <div class="form-group">
                            <label class="text-center bold">Écrire dans quel état est le produit ci-dessous</label>
                            <div class="col-md-6 text-center"><textarea class="ckeditor" name="etat" title="Écrire dans quel état est le produit ici" rows="10" cols="25"></textarea></div>
                            <div class="col-md-2"></div>
                        </div>
                    </div></center>



                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-8 text-center">
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                            <input type="file" title="Téléverser une image" name="image"  class="btn btn-success  text-center">
                            <button type="submit"name="Valider" class="btn btn-danger text-center">Envoyer</button>
                            <button type="reset" name="Valider" class="btn btn-warning  text-center">Effacer</button>

                        </div>
                    </div>

</form>


</body>
<div id="alerts">
    <noscript>
        <p>
            <strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript support, like yours, you should still see the contents (HTML data) and you should be able to edit it normally, without a rich editor interface.
        </p>
    </noscript>
</div>
</html>
<script type="text/javascript">
function validation(f) {
var ck_number=/^\$?\d+(\.\d+)?$/;
var ck_jour=/^\$?\d+?$/;
if (!ck_number.test(f.prix.value) ){
alert('Le prix est incorrect');
return false;
}
if (!ck_jour.test(f.duree.value) ){
alert('Veuillez entrer un nombre entier de jours pour la durée de l\'offre');
return false;
}
if (f.description.value.length <= 10 ){
alert('La description doit être complète');
return false;
}
if (f.etat.value.length <= 10){
alert('Vous devez indiquer l\'état de l\'objet');
return false;
}
return true;
}
</script>