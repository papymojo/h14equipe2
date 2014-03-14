<head>
    <base target="_parent"/>
    <?php include('./include/Dependances.html'); ?>

</head>
</head>
<body>
<div class="navbar navbar-inverse">
<div class="navbar-inner">

        <?php
        session_start();
        $Titre = $_GET['titre'];
        $Session = $_SESSION['pseudo'];

        echo "<a class='brand' id='recherche'>$Titre</a>";
        echo "<ul class='nav'>";
        echo '<li><a href="index.php"><button class="btn btn-info text-center" data-toggle="tooltip" data-placement="bottom" title="Revenir à la page d\'accueil"><i class="icon-large icon-home icon-white"></i> Accueil
</button></a></li>';
        if (isset($_SESSION['userid'])) {
            echo "<li><a href='modificationutilisateur.php'><button class='btn btn-info text-center' ata-toggle='tooltip' data-placement='bottom' title='Modifiez vos information personelles'><i class='icon-large icon-white icon-user'></i> " . $Session . "</button></a></li>";
            echo "<li><a href=ajouterauportemonaie.php><button class='btn btn-warning text-center' data-toggle='tooltip' data-placement='bottom' title='Approvisionnez votre porte monaie'><i class='icon-large icon-white  icon-shopping-cart'></i> " . number_format($_SESSION['argent'], 2, ",", " ") . "$</button></a></li>";
            echo "<li><a href=deconnexion.php><button class='btn btn-danger text-center' data-toggle='tooltip' data-placement='bottom' title='Déconnectez vous'><i class='icon-large icon-off icon-white'></i> Se déconnecter</button></a></li>";
        } else {
            echo "<li><a href=authentification.php><button class='btn btn-success ' data-toggle='tooltip' data-placement='bottom' title='Se connecter pour effectuer des achats'><i class='icon-large icon-off icon-white'></i></i> Se connecter</button></a></li>";
            echo "<li><a href=inscription.php><button class='btn btn-info text-center'><i class='icon-large icon-pencil icon-white'></i> Inscription</button></a></li>";
        } ?>
        <li id="recherche">
            <form class="navbar-form navbar-left" role="search" action="resultat.php" method="POST">
                <input type="search" class="form-control input-medium search-query" name="achercher"
                       placeholder="recherche">
                <button type="submit" value="" name="Cherche" class="btn btn-success  text-center" data-toggle='tooltip'
                        data-placement='bottom' title='Effectuer une recherche'><i
                        class="icon-large icon-white icon-search"></i></button>
            </form>
        </li>
        <?php
        session_start();
        if (isset($_SESSION['userid'])) {
            echo "<li><a href=ajouterProduit.php><button class='btn btn-info text-center' data-toggle='tooltip' data-placement='bottom' title='Vendre un Produit'><i class='icon-large icon-white icon-plus-sign'></i> Vendre un produit</button></a></li>";
        }
        ?>
        </ul>
    </div>
</div>
</body>




