<?php
// Here we are in the controller of Accueil

/*   Necessary Data   */
$title = '- Mentions Légales'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Mentions Légales'; // String of menu title
$link_gauche = ''; //Link of left arrow
$link_droite = ''; //Link of right arrow
$links = ['public/CSS/Style_MentionsLegales.css']; // Links of CSS
$scripts = []; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('views/mentions-legales.php');
require('templates/footer.php');
