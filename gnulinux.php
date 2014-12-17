<?php
   exec("ls openc/nightly/*.zip", $outputnightly);
   exec("ls openc/aurora/*.zip", $outputaurora);
   exec("ls openc/beta/*.zip", $outputbeta);
?>
<?php require 'inc/header.html'; ?>

<h1 class='methode'>Installation avec GNU/Linux (Ubuntu,&nbsp;Debian,&nbsp;etc.)</h1>
<p>Vous n'avez pas GNU/Linux ? Il existe d'autres <a href=".">méthodes d'installations</a> !</p>

<?php require 'inc/avertissements.html'; ?>

<h2>1. Rooter votre téléphone</h2>
<p><strong>Vous ne pouvez rooter votre téléphone que sous Windows</strong>. Si vous n'avez pas Windows, pour le moment aucune alternative n'est disponible, essayez d'en trouver un chez vos amis ou dans votre famille.</p>
<?php require 'inc/root.html'; ?>

<h2>2. Choisir sa version de Firefox&nbsp;OS</h2>
<?php require 'inc/choisir_version.html'; ?>

<h2>3. Installer Firefox&nbsp;OS</h2>
<ol>
    <li>Assurez-vous de n'avoir que ce téléphone branché en USB pour éviter toute fausse manipulation !</li>
    <li>Installez adb, un logiciel qui sert à envoyer des commandes à son téléphone. Tapez <code>sudo apt-get install android-tools-adb android-tools-fastboot</code> si vous êtes sous Debian, Ubuntu ou une autre dérivée de Debian. Sinon, utilisez votre gestionnaire de paquet habituel. Entrez votre mot de passe&nbsp;: apt-get va télécharger et installer adb.</li>
    <li>Éditez les règles udev&nbsp;: toujours dans la console tapez <code>sudo nano /etc/udev/rules.d/91-permissions.rules</code>. Rendez-vous à la fin du fichier et ajoutez la ligne <code>SUBSYSTEM=="usb", MODE="0666", GROUP="plugdev"</code>. Sauvegardez en faisant Ctrl+X, O, Entrée.</li>
    <li>Redémarrez udev en tapant <code>sudo service udev restart</code> pour Ubuntu dans la console. Pour les autres systèmes d'exploitation, relancez le service udev de la manière habituelle ou redémarrez.</li>
    <li>Tapez <code>adb reboot recovery</code> dans la console, appuyez sur Entrée, le téléphone va redémarrer dans un mode spécial&nbsp;: le mode <em>recovery</em>.</li>
    <li>Sélectionnez <code>apply update from adb</code> en utilisant le bouton haut et bas du volume et appuyez sur le bouton de démarrage pour valider.</li>
    <li>Tapez <code>adb sideload [chemin vers le fichier]/update.zip</code> dans la console puis appuyez sur Entrée.</li>
    <li>Appuyez sur démarrage une fois l'opération finie pour redémarrer le téléphone.</li>
</ol>
<?php require 'inc/changer_version.html'; ?>

<?php require 'inc/contact.html'; ?>

<?php require 'inc/footer.html'; ?>
