<?php
   exec("ls openc/nightly/*.zip", $outputnightly);
   exec("ls openc/aurora/*.zip", $outputaurora);
   exec("ls openc/beta/*.zip", $outputbeta);
?>
<!DOCTYPE html>
<html xml:lang="fr" lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Builds communautaires - B2G (Firefox OS) - Mozilla francophone</title>
        <link rel="stylesheet" type="text/css" href="//mozfr.org/custom/style/mozfr.css" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="//mozfr.org/favicon.ico?v=3" />
        <script src="//mozfr.org/mozfrtab/tabzilla.js"></script>
        <script src="//mozfr.org/custom/js/nav-main.js" type="text/javascript"></script>
    </head>
    <body>
        <header id="masthead">
          <a href="http://mozfr.org" title="Retour au portail Mozilla Francophone" id="tabzilla">mozFR</a>
          <nav id="nav-main" role="navigation">
            <span class="toggle" role="button" aria-controls="nav-main-menu" tabindex="0">Menu</span>
            <ul id="nav-main-menu">
              <li class="first"><a href="//mozfr.org">Accueil</a></li>
              <li><a href="http://forums.mozfr.org/">Forums</a></li>
              <li><a href="//mozfr.org/participer">Participer</a></li>
              <li><a href="//mozfr.org/manifesto">À propos</a></li>
              <li class="last"><a href="//mozfr.org/archives">Archives</a></li>
            </ul>
          </nav>
        </header>
        <div id='wrapper'>
            <h1>Builds communautaires pour le ZTE Open C</h1>
            <p>Le but des builds communautaires est d'avoir Firefox OS  <a href="http://blogzinet.free.fr/blog/index.php?post/2012/02/26/Firefox-%3A-Quelle-version-choisir" hreflang="fr" title="Firefox : Quelle version choisir ? canal Aurora, bêta, nightly ou Release de Mozilla (26 fév. 2012) Mozinet sur BlogZiNet">Beta, Aurora et Nightly</a> comme pour le navigateur Firefox. La communauté réalise ces builds à destination de tous et cela grâce à l'ouverture du code source de Firefox OS. Vous pourrez revenir sur une version 1.3 en réexécutant l'outil de root.</p>
            <p>Consultez notre <a href="http://blog.mozfr.org/post/2014/11/Firefox-OS-du-bon-emploi-des-builds-communautaires-pour-ZTE-Open-C" hreflang="fr" title="Firefox OS : du bon emploi des builds communautaires pour le ZTE Open C (23 nov. 2014) Communauté Mozilla francophone">article d'annonce</a> et les avertissements ci-dessous&nbsp;:</p>
            <div id="warning">
                <p>Attention&nbsp;: Le «&nbsp;root&nbsp;» est une manipulation qui comporte des risques. L'installation et l'utilisation d'un logiciel «&nbsp;root&nbsp;» peut engendrer des dommages irréversibles sur votre téléphone et entraîner la perte de la garantie constructeur&nbsp;!</p>
                <p>Les builds communautaires ne sont pas garanties comme fonctionnels.</p>
		<p>Notez aussi que les bugs trouvés peuvent être dus aux builds et non à Firefox OS. Les builds ne sont pas officiellement supportés par Mozilla.</p>
            </div>

            <h2>Rooter votre téléphone</h2>

            <p>Avant tout, il faut rooter votre téléphone, c'est-à-dire obtenir les droits «&nbsp;administrateur&nbsp;» (root). L'opération n'est pas réversible et installera une version similaire à la version 1.3. Le «&nbsp;rootage&nbsp;» du téléphone ne sera à faire qu'une seule fois.</p>
            <p>Cette opération supprimera les paramètres du téléphone et de vos applications, ainsi que les applications elles-mêmes. Bien que les fichiers personnels (photos, vidéos, musiques, etc.) ne devraient pas être affctés par cette procédure, il est fortement conseillé d'en faire une sauvegarde préalalble. Si vous avez créé ou vous êtes connecté avec <a href="https://support.mozilla.org/fr/kb/utiliser-comptes-firefox-applications-marketplace" hreflang="fr" title="Utiliser les comptes Firefox pour gérer vos applications du Marketplace – Assistance de Mozilla">un compte Firefox dans l'application Marketplace</a>, vous pourrez retrouver ensuite toutes les applications installées alors que vous étiez connecté avec ce compte.</p>
            <p>Cette opération de rootage ne fonctionne que sous Windows. Si vous n'avez pas Windows, pour le moment aucune alternative n'est disponible, essayez d'en trouver un chez vos amis ou dans votre famille.</p>
            <ol>
                <li>Téléchargez le <a href="http://www.ztefrance.com/downloads/Pack_root_du_ZTE_Open_C.zip">Pack root du ZTE Open C</a>.</li>
                <li>Extrayez le fichier .zip (cliquez droit sur le fichier zip puis extrayez le dossier). <a href="extrair1.png">(image)</a></li>
                <li>Ouvrez le dossier extrait puis extrayez le fichier <code>PSTW_SDT_OPENC_Upgrading_toolV1.0.0B01.zip</code>.</li>
                <li>Ouvrez le dossier et installez le fichier <code>Open C Upgrade Tool Setup.exe</code>.</li>
                <li>Revenez dans le dossier précédent et extrayez le fichier <code>P821A10_FR_ENG_20140806.zip</code>.</li>
                <li>Ouvrez le logiciel, acceptez les conditions d'utilisation après les avoir bien lues, puis suivez les instructions du logiciel. <a href="agree.png">(image)</a>&nbsp;:<br />
                Attention&nbsp;: Veuillez n'avoir qu'un <strong style="text-transform: uppercase;">seul</strong> périphérique connecté à l'ordinateur. <strong style="text-transform: uppercase;">Ne pas déconnecter</strong> le mobile lors de la mise à jour.
                <ol>
                <li>Veuillez retirer la carte <abbr lang="en" title="Subscriber identity module">SIM</abbr> avant d'effectuer la mise à jour.</li>
                <li>Allumez votre téléphone, puis connectez-le à votre ordinateur à l'aide du cable <abbr lang="en" title="Universal serial bus">USB</abbr> fourni.</li>
                </ol></li>
                <li>Dans le logiciel, cliquez sur parcourir et sélectionnez le dossier <code>P821A10_FR_ENG_20140806</code></a>. <a href="logiciel.png">(image)</a></li>
                <li>Il est possible que le téléphone ne soit pas reconnu. Le programme affiche «&nbsp;Échec de la mise à jour&nbsp;». Il faut alors installer un pilote (driver). Téléchargez <a href="http://download.ztedevices.com/UpLoadFiles/product/643/3601/soft/2013102209095023.zip">ce driver</a> et installez-le. Si durant l'installation du driver des boîtes de dialogue vous invitent à formater un disque, ingnorez-les. Le logiciel est prêt lorsqu'il affiche «&nbsp;prêt&nbsp;». <a href="pret.png">(image)</a></li>
                <li>Cliquez sur «&nbsp;mise à jour&nbsp;» et laissez le logiciel agir, un message – «&nbsp;Install from sdcard complete&nbsp;» – vous signalera que la mise à jour a réussi. <a href="majfinal.png">(image)</a></li>
            </ol>
            <p>À partir de là, votre système d'exploitation n'est plus un problème&nbsp;: les prochaines étapes sont réalisables sous tous les systèmes d'exploitation.</p>

            <h2>Installer un build communautaire</h2>
            <p>Assurez-vous d'avoir rooté votre téléphone (section précédente). Ensuite, téléchargez la version de Firefox OS voulue (le update.zip) pour le ZTE Open C&nbsp;:<p>
            <table summary="Tableau des versions de Firefox OS en développement disponibles">
                <tr>
                    <th>Type</th>
                    <td>Beta</td>
                    <td>Aurora</td>
                    <td>Nightly</td>
                </tr>
                <tr>
                    <th>Fréquence de mise à jour</th>
                    <td>Tous les mois</td>
                    <td>Tous les 15 jours</td>
                    <td>Toutes les nuits</td>
                </tr>
                <tr>
                    <th>Fichier</th>
                    <td><a href="<?php echo "/".$outputbeta[0]; ?>">update.zip</a></td>
                    <td><a href="<?php echo "/".$outputaurora[0]; ?>">update.zip</a></td>
                    <td><a href="<?php echo "/".$outputnightly[0]; ?>">update.zip</a></td>
                </tr>
            </table>
            <!-- vérifier la signature sha1 et l'afficher à coté ? + date de la génération du build -->
            <p>Note&nbsp;: il est possible de vérifier la signature du fichier téléchargé, un fichier «&nbsp;signature&nbsp;» sha1 est disponible dans chaque dossier de build.</p>
            <p>Quelle méthode d'installation souhaitez-vous utiliser&nbsp;?</p>
            <ul>
                <li><a href="#cartesd">Une carte microSD (le plus simple et fonctionnel avec tous les systèmes d'exploitation)</a></li>
                <li><a href="#windows">Windows</a></li>
                <li><a href="#mac">MacOS</a></li>
                <li><a href="#linux">GNU/Linux (Debian, Ubuntu, etc.)</a></li>
            </ul>

            <h3 id="cartesd">Avec une carte microSD</h3>
            <ol>
                <li>Copiez le fichier update.zip (sans le dézipper) sur une carte microSD.</li>
                <li>Mettez la carte microSD dans le téléphone à l'emplacement prévu.</li>
                <li>Éteignez votre téléphone.</li>
                <li>Démarrez votre téléphone en mode <em>recovery</em> en appuyant en même temps sur le bouton de démarrage et le bouton + du volume (haut).</li>
                <li>Sélectionnez «&nbsp;apply update from sdcard&nbsp;» en vous déplaçant avec les boutons haut et bas du volume et le bouton de démarrage pour valider.</li>
                <li>Sélectionnez le fichier update.zip toujours avec les boutons du volume et appuyez sur démarrage. Patientez durant l'installation.</li>
                <li>Appuyez sur démarrage une fois l'opération finie sur le téléphone pour le redémarrer.</li>
            </ol>
            <p>Le téléphone est mis à jour et recevra les prochaines mises à jour via le réseau wifi. Si vous souhaitez changer de version (Beta, Aurora ou Nightly), vous pourrez répéter cette procédure.</p>

            <h3 id="windows">Sous Windows</h3>
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
            <p>Le téléphone est mis à jour et recevra les prochaines mises à jour via le réseau wifi. Si vous souhaitez changer de version (Beta, Aurora ou Nightly), vous pourrez répéter cette procédure.</p>

            <h3 id="mac">Sous Mac</h3>
            <p>Utilisez la méthode avec <a href="#cartesd">carte microSD</a> (plus simple) ou venez rédiger les instructions (voir contact à la fin ou <a href="https://github.com/dattaz/sitebuild">sur GitHub</a>).</p>
            <!--
            <ol>
                <li>Débranchez le téléphone s'il est branché</li>
                <li>Installez adb</li>
                <li>pas de udev ? étape 2 : Il faut éditer les règles udev dans la console tapez "sudo nano /lib/udev/rules.d/91-permissions.rules" (ou tu autre éditeur de texte, gedit par exemple (à la place de nano) pour avoir un éditeur graphique) et rendez-vous à la fin du fichier et ajouter cette ligne : SUBSYSTEM=="usb", MODE="0666", GROUP="plugdev" <br>Redemarrez udev en tapant "sudo service udev restart" dans la console.</li>
                <li>Tapez "adb reboot recovery" dans la console, appuyez sur Entrée, le téléphone va redémarrer dans un mode spécial.</li>
                <li>Sélectionnez "apply update from adb" en utilisant le bouton haut et bas du volume et appuyez sur le bouton power pour valider.</li>
                <li>Tapez "adb sideload [chemin vers le fichier]/update.zip" dans la console puis appuyez sur Entrée.</li>.
                <li>Appuyez sur power une fois l'opération fini sur le téléphone pour redémarrer le téléphone.</li>
            </ol>
            <p>Le téléphone est mis à jour et recevra les prochaines mises à jour via le réseau wifi. Si vous souhaitez changer de version (Beta, Aurora ou Nightly), vous pourrez procéder de même ou utiliser la méthode par carte microSD décrite ici.</p>-->

            <h3 id="linux">Sous GNU/Linux (Debian, Ubuntu, etc.)</h3>
            <ol>
                <li>Installez adb, un logiciel qui sert à envoyer des commandes à son téléphone. Tapez <code>sudo apt-get install android-tools-adb android-tools-fastboot</code> si vous êtes sous Debian, Ubuntu ou une autre dérivée de Debian. Sinon, utilisez votre gestionnaire de paquet habituel. Entrez votre mot de passe&nbsp;: apt-get va télécharger et installer adb.</li>
                <li>Éditez les règles udev&nbsp;: toujours dans la console tapez <code>sudo nano /lib/udev/rules.d/91-permissions.rules</code>. Rendez-vous à la fin du fichier et ajoutez la ligne <code>SUBSYSTEM=="usb", MODE="0666", GROUP="plugdev"</code>. Sauvegardez en faisant CTRL+X, O, ENTRÉE.</li>
                <li>Redémarrez udev en tapant <code>sudo service udev restart</code> pour Ubuntu dans la console. Pour les autres systèmes d'exploitation, relancez le service udev de la manière habituelle ou redémarrez.</li>
                <li>Tapez <code>adb reboot recovery</code> dans la console, appuyez sur Entrée, le téléphone va redémarrer dans un mode spécial&nbsp;: le mode <em>recovery</em>.</li>
                <li>Sélectionnez <code>apply update from adb</code> en utilisant le bouton haut et bas du volume et appuyez sur le bouton de démarrage pour valider.</li>
                <li>Tapez <code>adb sideload [chemin vers le fichier]/update.zip</code> dans la console puis appuyez sur Entrée.</li>
                <li>Appuyez sur démarrage une fois l'opération finie pour redémarrer le téléphone.</li>
            </ol>
            <p>Le téléphone est mis à jour et recevra les prochaines mises à jour via le réseau wifi. Si vous souhaitez changer de version (Beta, Aurora ou Nightly), vous pourrez répéter la procédure.

            <h2>Contact</h2>
            <p>Une question, une remarque&nbsp;? Un canal <a href="http://wiki.mozfr.org/IRC" hreflang="fr" title="IRC et la communauté francophone — Wiki Mozilla francophone">IRC</a> est disponible sur irc.mozilla.org #BuildOpenCEu (vous pouvez utilisez <a href="http://chat.mibbit.com/?server=irc.mozilla.org&channel=%23BuildOpenCEu">mibbit en webirc</a>).</p>
        </div>
    </body>
</html>
