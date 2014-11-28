<?php
   exec("ls openc/nightly/*.zip", $outputnightly);
   exec("ls openc/aurora/*.zip", $outputaurora);
   exec("ls openc/beta/*.zip", $outputbeta);
?>
<?php require 'inc/header.html'; ?>

<p>Le but des builds communautaires est d'avoir Firefox OS  <a href="http://blogzinet.free.fr/blog/index.php?post/2012/02/26/Firefox-%3A-Quelle-version-choisir" hreflang="fr" title="Firefox : Quelle version choisir ? canal Aurora, bêta, nightly ou Release de Mozilla (26 fév. 2012) Mozinet sur BlogZiNet">Beta, Aurora et Nightly</a> comme pour le navigateur Firefox. La communauté réalise ces builds à destination de tous et cela grâce à l'ouverture du code source de Firefox OS. Vous pourrez revenir sur une version 1.3 en réexécutant l'outil de root.</p>

<h2>Méthode d'installation</h2>

<div class="methods">
    <h2 class="method-button"><a href="cartesd">Carte microSD (conseillée) »</a></h2>

    <div class="grid"><div class="grid-3">
        <div><h2 class="method-button"><a href="gnulinux">GNU/Linux »</a></h2></div>
        <div><h2 class="method-button"><a href="macosx">Mac OS X »</a></h2></div>
        <div><h2 class="method-button"><a href="windows">Windows »</a></h2></div>
    </div></div>
</div>

<?php require 'inc/contact.html'; ?>
<img src="img/fox-front.png">
<?php require 'inc/footer.html'; ?>
