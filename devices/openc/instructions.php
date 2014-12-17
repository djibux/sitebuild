<h1 class='builds-title'><a href="./">Builds communautaires pour le ZTE&nbsp;Open&nbsp;C <strong><?php echo $version ?></strong></a></h1>

<p>Les builds communautaires proposent Firefox OS <a href="http://blogzinet.free.fr/blog/index.php?post/2012/02/26/Firefox-%3A-Quelle-version-choisir" hreflang="fr" title="Firefox : Quelle version choisir ? canal Aurora, bêta, nightly ou Release de Mozilla (26 fév. 2012) Mozinet sur BlogZiNet">Beta, Aurora et Nightly</a> comme pour le navigateur Firefox. La communauté réalise ces builds à destination de tous les détenteurs de ZTE Open C <strong><?php echo $version ?></strong> et cela grâce à l'ouverture du code source de Firefox OS. Vous pourrez revenir sur une version 1.3 en réexécutant l'outil de root.</p>

<p class='warning'>Si vous n'avez pas la version <strong><?php echo $version ?></strong> du ZTE Open C, ou que vous n'êtes pas certain de votre version, merci de consulter <a href='openc'>cette page</a>.</p>

<h2>Instructions</h2>
<p>La première installation de builds communautaires comporte trois étapes :</p>
<ol>
    <li>Le <a href='#root'>root</a> du téléphone</li>
    <li>Le <a href='#download'>téléchargement</a> d'une version de Firefox&nbsp;OS</li>
    <li>L'<a href='#install'>installation</a> de la version choisie
</ol>
<p>Par la suite, les mises à jour se feront directement depuis le téléphone, par Wi-Fi.</p>

<h3 id='root'>1. Rooter votre téléphone</h3>
<p><strong>Vous ne pouvez rooter votre téléphone que sous Windows</strong>. Si vous n'avez pas Windows, pour le moment aucune alternative n'est disponible, essayez d'en trouver un chez vos amis ou dans votre famille.</p>

<?php require 'devices/openc/root-openc-'.strtolower($version).'.php' ?>

<h3 id='download'>2. Choisir et télécharger une version de Firefox&nbsp;OS</h3>
<?php require 'devices/openc/download.php'; ?>

<h3 id='install'>3. Installer un build communautaire Firefox&nbsp;OS</h3>
<p>Suivez la procédure indiquée sur <a href="installation">cette page</a>.</p>