<head>
    <base target="_parent" />
    <?php include('./include/Dependances.html'); ?>

</head>
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">

        <?php
        session_start();
        $Titre = $_GET['titre'];
        $Session = $_SESSION['pseudo'];

        echo "<a class='brand' id='recherche'>$Titre</a>";
        echo "<ul class='nav'>";
        if (isset($_SESSION['userid'])) {
            echo "<a class='brand' id='recherche'>$Session</a>";
            echo "<li id='recherche'><a class='brand'>" . $_SESSION['argent'] . "$</a></li>";
            echo "<li><a href=ajouterauportemonaie.php><button class='btn btn-warning text-center'>Approvisionner</button></a></li>";
            echo "<li><a href=deconnexion.php><button class='btn btn-danger text-center'>Se déconnecter</button></a></li>";
        } else {
            echo "<li><a href=authentification.php><button class='btn btn-success '>Se connecter</button></a></li>";
            echo "<li><a href=inscription.php><button class='btn btn-info text-center'>Inscription</button></a></li>";
        } ?>
        <li id="recherche">
            <form class="navbar-form navbar-left" role="search" action="resultat.php" method="POST">
                <input type="search" class="form-control" name="achercher" placeholder="recherche">
                <input type="submit" value = "Rechercher" name="Cherche" class="btn btn-success  text-center">
            </form>
        </li>
        <?php
        session_start();
        if (isset($_SESSION['userid'])) {
        echo "<li><a href=ajouterProduit.php><button class='btn btn-info text-center'>Vendre un produit</button></a></li>";
        }
        ?>
        </ul>
    </div>
</div>
</body>




