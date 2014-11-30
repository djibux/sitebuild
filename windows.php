<?php
   exec("ls openc/nightly/*.zip", $outputnightly);
   exec("ls openc/aurora/*.zip", $outputaurora);
   exec("ls openc/beta/*.zip", $outputbeta);
?>
<?php require 'inc/header.html'; ?>

<h1 class='methode'>Installation avec Windows</h1>
<p>Vous n'avez pas Windows ? Il existe d'autres <a href=".">méthodes d'installations</a> !</p>

<?php require 'inc/avertissements.html'; ?>

<h2>1. Rooter votre téléphone</h2>
<?php require 'inc/root.html'; ?>

<h2>2. Choisir sa version de Firefox&nbsp;OS</h2>
<?php require 'inc/choisir_version.html'; ?>

<h2>3. Installer Firefox&nbsp;OS</h2>

<ol>
    <li>Débranchez le téléphone s'il est branché.</li>
    <li>Installez adb, un logiciel qui sert à envoyer des commandes à son téléphone&nbsp;:
        <ol>
            <li>Sur <a href="https://developer.android.com/sdk/index.html">https://developer.android.com/sdk/index.html</a>, cliquez sur «&nbsp;View all downloads and sizes&nbsp;», puis téléchargez un paquet Windows sous «&nbsp;SDK Tools Only&nbsp;».</li>
            <li>Installez adb dans <code>c:\Android/android-sdk</code>.</li>
            <li>Lancez adb et sélectionnez SDK Manager. Dans la fenêtre qui s'ouvre, sélectionnez uniquement Google USB driver dans «&nbsp;extras&nbsp;» puis cliquez sur install X packages en bas à droite. Acceptez la licence et patientez.</li>
        </ol>
    </li>
    <li>Sur le téléphone, activez adb&nbsp;: rendez-vous dans Paramètres => Informations => Plus d'informations => Développeurs => Débogage distant pour l'activer.</li>
    <li>Branchez le téléphone à l'ordinateur.</li>
    <li>Lancez l'invite de commandes Windows&nbsp;: cliquez sur le menu démarrer puis cherchez le programme cmd et cliquez dessus.</li>
    <li>Depuis l'invite de commande, allez dans le dossier d'installation en tapant «&nbsp;<code>cd c:\Android\android-sdk</code>&nbsp;» sans les guillemets. Tapez sur Entrée pour valider, comme pour toutes les commandes suivantes.</li>
    <li>Tapez <code>cd platform-tools</code> dans l'invite de commande.</li>
    <li>Tapez <code>adb reboot recovery</code>&nbsp;: le téléphone va redémarrer dans un mode spécial&nbsp;: le mode <em>recovery</em>.</li>
    <li>Sélectionnez <code>apply update from adb</code> en utilisant le bouton haut et bas du volume pour vous déplacer et appuyez sur le bouton de démarrage pour valider.</li>
    <li>Tapez <code>adb sideload [chemin vers le fichier]/update.zip</code> (le chemin doit être sans espace ou caractères spéciaux) dans la console puis appuyez sur Entrée.</li>
    <li>Appuyez sur démarrage une fois l'opération finie sur le téléphone pour redémarrer le téléphone.</li>
</ol>
<p>Le téléphone est mis à jour et recevra les prochaines mises à jour via le réseau wifi. Si vous souhaitez changer de version (Beta, Aurora ou Nightly), vous pourrez répéter cette procédure, il faudra cependant faire "wipe data/factory reset" (cela efface toutes les données du téléphone) avant de procéder à l'installation d'un nouveau canal de release si vous descendez en version.</p>

<?php require 'inc/contact.html'; ?>

<?php require 'inc/footer.html'; ?>
