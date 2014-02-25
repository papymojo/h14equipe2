<head>
    <base target="_parent" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Projet.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.0.3.min.js"></script>

</head>
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">

        <?php
        session_start();
        $Titre = $_GET['titre'];
        $Session = $_SESSION['pseudo'];

        echo "<a class='brand' href='#'>$Titre</a>";
        echo "<ul class='nav'>";
        if (isset($_SESSION['userid'])) {
            echo "<a class='brand' href='#'>$Session</a>";
            echo "<li><a class='brand' href='#'>" . $_SESSION['argent'] . "$</a></li>";
            echo "<li><a href=ajouterauportemonaie.php><button class='btn btn-warning text-center'>Aprovisionner</button></a></li>";
            echo "<li><a href=deconnexion.php><button class='btn btn-danger text-center'>Se déconnecter</button></a></li>";
        } else {
            echo "<li><a href=authentification.html><button class='btn btn-success '>Se connecter</button></a></li>";
            echo "<li><a href=inscription.html><button class='btn btn-info text-center'>Inscription</button></a></li>";
        } ?>
        <li>
            <form class="form-inline" role="form" action="resultat.php" method="POST">
                <input type="search" class="form-control" name="achercher" placeholder="recherche">
                <input type="submit" name="Cherche" class="btn btn-success  text-center">
            </form>
        </li>
        <?php
        session_start();
        if (isset($_SESSION['userid'])) {
        echo "<li><a href=ajouterProduit.html><button class='btn btn-info text-center'>Vendre Un Produit</button></a></li>";
        }
        ?>
        </ul>
    </div>
</div>
</body>




