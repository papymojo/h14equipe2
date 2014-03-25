<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Site d'enchères - Page de connexion </title>
    <?php include('./include/Dependances.html'); ?>

    <script type="text/javascript">

        $(document).ready(function () {

            $('.carousel').carousel();

        });

    </script>
</head>
<body>
<?php
session_start();
include("./include/mysqlapi.inc.php");
echo '<iframe src="iframepanel.php?titre=Enchères et en os" height="80" width="100%" name="panel" frameborder="0"></iframe>';
?>
<div style="width : 80%;   margin-left: auto;  margin-right: auto;">
    <div id="monCaroussel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php echo carousel(); ?>
        </div>
        <a class="carousel-control left" href="#monCaroussel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#monCaroussel" data-slide="next">&rsaquo;</a>
        <ol class="carousel-indicators ">
            <li data-target="#monCaroussel" data-slide-to="0" class="active"></li>
            <li data-target="#monCaroussel" data-slide-to="1"></li>
            <li data-target="#monCaroussel" data-slide-to="2"></li>
            <li data-target="#monCaroussel" data-slide-to="3"></li>
            <li data-target="#monCaroussel" data-slide-to="4"></li>
            <li data-target="#monCaroussel" data-slide-to="5"></li>
            <li data-target="#monCaroussel" data-slide-to="6"></li>
            <li data-target="#monCaroussel" data-slide-to="7"></li>
            <li data-target="#monCaroussel" data-slide-to="8"></li>
            <li data-target="#monCaroussel" data-slide-to="9"></li>
        </ol>
    </div>
</div>
</body>
</html>


