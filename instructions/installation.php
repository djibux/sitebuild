<h1 class='methode'>Installation des builds communautaires Firefox&nbsp;OS</h1>

<h2 id='introduction'>Introduction</h2>
<p>Cette page indique comment installer un <a href='.'>build communautaire Firefox&nbsp;OS</a>.  <span class='warning'>Cette page suppose que vous avez déjà téléchargé un build communautaire et rooté votre téléphone</span>.</p>

<p>Il existe plusieurs solutions pour installer les builds</p>
<div class="methods">
    <h2 class="method-button"><a href="#sdcard">Carte microSD (conseillée) »</a></h2>

    <div class="grid"><div class="grid-3">
        <div><h2 class="method-button"><a href="#gnulinux">GNU/Linux »</a></h2></div>
        <div><h2 class="method-button"><a href="#macosx">Mac OS X »</a></h2></div>
        <div><h2 class="method-button"><a href="#windows">Windows »</a></h2></div>
    </div></div>
</div>
<p>Une fois l'installation terminée, le téléphone recevra les prochaines mises à jour via le wifi. Si vous souhaitez changer de version (Beta, Aurora ou Nightly), vous pourrez répéter la procédure.  Si vous descendez en version (par exemple pour passer de Aurora à Beta), il faudra auparavant faire un "wipe data/factory reset" (qui efface toutes les données du téléphone).</p>

<h2 id='sdcard'>Installation avec carte SD</h2>
<p>Si vous n'avez pas de carte SD, il existe d'autres <a href='#introduction'>méthodes d'installation</a>.</p>
<ol>
    <li>Copiez le fichier update.zip (sans le dézipper) sur une carte microSD.</li>
    <li>Mettez la carte microSD dans le téléphone à l'emplacement prévu.</li>
    <li>Éteignez votre téléphone.</li>
    <li>Démarrez votre téléphone en mode <em>recovery</em> en appuyant en même temps sur le bouton de démarrage et le bouton + du volume (haut).</li>
    <li>Sélectionnez «&nbsp;apply update from sdcard&nbsp;» en vous déplaçant avec les boutons haut et bas du volume et le bouton de démarrage pour valider.</li>
    <li>Sélectionnez le fichier update.zip toujours avec les boutons du volume et appuyez sur démarrage. Patientez durant l'installation.</li>
    <li>Appuyez sur démarrage une fois l'opération finie sur le téléphone pour le redémarrer.</li>
</ol>

<h2 id='gnulinux'>Installation avec GNU/Linux (Ubuntu,&nbsp;Debian,&nbsp;etc.)</h2>
<p>Si vous n'avez pas GNU/Linux, il existe d'autres <a href='#introduction'>méthodes d'installation</a>.</p>

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

<h2 id='windows'>Installation avec Windows</h2>
<p>Si vous n'avez pas Windows, il existe d'autres <a href='#introduction'>méthodes d'installation</a>.</p>

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

<h2 id='macosx'>Installation avec Mac OSX</h2>

<p>Les instructions sont encore manquantes pour Mac OS X. Venez-nous aider à les rédiger ! Vous pouvez prendre contact sur IRC (ci-dessous) ou sur <a href="https://github.com/dattaz/sitebuild">GitHub</a>.</p>

<p>En attendant, vous pouvez utiliser une autre <a href="#introduction">méthode d'installation</a>, par exemple avec <a href="#sdcard">carte SD</a>.</p>
