
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <?php
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
           echo $this->Html->css('bootstrap.css');
            echo $this->Html->css('styles.css');
            ?>
</head>
<body>

<!-- Si vous voulez qu'un menu soit rendu pour toutes vos vues,
incluez le ici -->
<div id="header">
    <?php echo $this->element ('menu'); ?>
</div>




<!-- C'est ici que je veux voir mes vues être rendues -->
<?= $this->fetch('content') ?>

<!-- Ajoute un footer pour chaque page rendue -->
<footer class="footer-distributed">

    <div class="footer-left">

        <h3><span>Les Myrtilles</span></h3>

        <p class="footer-links">
            <a href="#">Accueil</a>
            ·
            <a href="#">News</a>
            ·
            <a href="#">Tarifs</a>
            ·
            <a href="#">Nous contacter</a>
        </p>

        <p class="footer-company-name">Petite Montagne SARL &copy; 2016</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>102 chemin des Bas Rupts</span> Gerardmer, France</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>03 29 63 21 38</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">campinglesmyrtilles@wanadoo.fr</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>A Propos</span>
            Sur les hauteurs de Gérardmer, vous séjournerez au camping Les MYRTILLES dans un cadre de verdure, spacieux et convivial.
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>


</body>
</html>