<?php

/**
 *
 * Dyanmic Opengraph and Twitter Meta tags extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 Jeff Cocking
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
    exit;
}

if (empty($lang) || !is_array($lang)) {
    $lang = array();
}

$lang = array_merge($lang, array(
    'LOTUSJEFF_DYNAMIC_SETTINGS' => 'Meta Tags Dynamic OpenGraph (Facebook) and Twitter ',
    'LOTUSJEFF_DYNAMIC_FACEBOOK' => 'Activer les Meta Tags  OpenGraph (Facebook)',
    'LOTUSJEFF_DYNAMIC_TWITTER' => 'Activer les Twitter Cards',
    'LOTUSJEFF_DYNAMIC_FIRST_IMAGE' => 'Premiere occurence(image)',
    'LOTUSJEFF_DYNAMIC_FIRST_IMAGE_EXPLAIN' => 'Choisir OUI utilisera la première image jointe . NON utilisera la dernière image jointe dans le sujet.',
    'LOTUSJEFF_DYNAMIC_RANDOM_IMAGE' => 'Activer le choix aléatoire (image)',
    'LOTUSJEFF_DYNAMIC_RANDOM_IMAGE_EXPLAIN' => 'Choisir OUI utilisera une image aléatoirement de votre forum. (N\'utilise pas d\'image de la messagerie privée.',
    'LOTUSJEFF_DYNAMIC_TWITTER_SITE' => '@nom d\'utilisateur ',
    'LOTUSJEFF_DYNAMIC_TWITTER_SITE_EXPLAIN' => 'Entrez le nom d\'utilisateur Twitter associé à ce site. Doit contenir @',
    'LOTUSJEFF_DYANMIC_OPENGRAPH_LOCALE' => 'fr_FR',
        ));
