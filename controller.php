<?php
    $page = $_GET['page'];

    switch ($page) {
        case 'openc-fr':
            $version = 'FR';
            require 'devices/openc/instructions.php';
            break;
        case 'openc-eu':
            $version = 'EU';
            require 'devices/openc/instructions.php';
            break;
        case 'installation':
            require 'instructions/installation.php';
            break;
        case 'openc':
        default:
            require 'devices/openc/choose-version.php';
    }