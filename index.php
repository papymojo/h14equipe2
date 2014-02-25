<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Site d'enchères - Page de connexion </title>
    <?php include('./include/Dependances.html'); ?>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.carousel').carousel();

        });

    </script>
</head>
<body>
<?php
session_start();
echo '<iframe src="iframepanel.php?titre=Accueil" height="100" width="100%" name="panel" frameborder="0" ></iframe>';
?>


<div class="container">
    <div class="row">
        <div class="span12 well">
            <div id="monCaroussel" class="carousel">
                <div class="carousel-inner">


                    <div class="item active text-center"><img src = "./img/canard.png"></div>
                    <div class="item text-center"><img src = "./img/cheval.png"></div>
                    <div class="item text-center"><img src = "./img/chevre.png"></div>
                    <div class="item text-center"><img src = "./img/cochon.png"></div>



                </div>
                <a class = "carousel-control left" href="#monCaroussel" data-slide="prev">&laquo;</span></a>
                <a class = "carousel-control right" href="#monCaroussel" data-slide="next">&raquo;</span></a>
            </div>
        </div>
    </div>

</div>
</body>
</html>


