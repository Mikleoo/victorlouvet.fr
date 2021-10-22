<?php
// Here we are in the controller of Accueil

/*   Necessary Data   */
$title = '- Not Found'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = '404'; // String of menu title
$link_gauche = ''; //Link of left arrow
$link_droite = ''; //Link of right arrow
$links = ['public/CSS/Style_404.css']; // Links of CSS
$scripts = []; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('templates/404.php');
require('templates/footer.php');
