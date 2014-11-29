<?php
   exec("ls openc/nightly/*.zip", $outputnightly);
   exec("ls openc/aurora/*.zip", $outputaurora);
   exec("ls openc/beta/*.zip", $outputbeta);
?>
<?php require 'inc/header.html'; ?>

<h1 class='methode'>Installation par carte SD</h1>
<p>Vous n'avez pas de carte SD ? Il existe d'autres <a href=".">méthodes d'installations</a> !</p>

<?php require 'inc/avertissements.html'; ?>

<h2>1. Rooter votre téléphone</h2>
<p><strong>Vous ne pouvez rooter votre téléphone que sous Windows</strong>. Si vous n'avez pas Windows, pour le moment aucune alternative n'est disponible, essayez d'en trouver un chez vos amis ou dans votre famille.</p>
<?php require 'inc/root.html'; ?>

<h2>2. Choisir sa version de Firefox&nbsp;OS</h2>
<?php require 'inc/choisir_version.html'; ?>

<h2>3. Installer Firefox&nbsp;OS</h2>
<ol>
    <li>Copiez le fichier update.zip (sans le dézipper) sur une carte microSD.</li>
    <li>Mettez la carte microSD dans le téléphone à l'emplacement prévu.</li>
    <li>Éteignez votre téléphone.</li>
    <li>Démarrez votre téléphone en mode <em>recovery</em> en appuyant en même temps sur le bouton de démarrage et le bouton + du volume (haut).</li>
    <li>Sélectionnez «&nbsp;apply update from sdcard&nbsp;» en vous déplaçant avec les boutons haut et bas du volume et le bouton de démarrage pour valider.</li>
    <li>Sélectionnez le fichier update.zip toujours avec les boutons du volume et appuyez sur démarrage. Patientez durant l'installation.</li>
    <li>Appuyez sur démarrage une fois l'opération finie sur le téléphone pour le redémarrer.</li>
</ol>
<p>Le téléphone est mis à jour et recevra les prochaines mises à jour via le réseau wifi. Si vous souhaitez changer de version (Beta, Aurora ou Nightly), vous pourrez répéter cette procédure, il faudra cependant faire "wipe data/factory reset"  avant (cela efface toutes les données du téléphone) de procéder à l'installation d'un nouveau canal de release.</p>

<?php require 'inc/contact.html'; ?>

<?php require 'inc/footer.html'; ?>
