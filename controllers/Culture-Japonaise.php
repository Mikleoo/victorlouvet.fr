<?php
// Here we are in the controller of Culture-Japonaise

/*   Necessary Data   */
$title = '- Culture-Japonaise'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Culture-Japonaise'; // String of menu title
$link_gauche = 'Projets'; //Link of left arrow
$link_droite = 'Manga-Anime'; //Link of right arrow
$links = []; // Links of CSS
$scripts = []; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('templates/maintenance.html');
require('templates/footer.php');
