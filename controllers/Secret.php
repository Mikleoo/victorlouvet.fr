<?php
// Here we are in the controller of Secret page
include_once("configuration.php");

/*   Necessary Data   */
$title = '- Secret'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h2'; // Hx of menu title
$nom_page = 'Secret'; // String of menu title
$link_gauche = ''; //Link of left arrow
$link_droite = ''; //Link of right arrow
$links = ['public/CSS/CSS_Secret/Style_Secret.css']; // Links of CSS
$scripts = ['public/JS/JS_Secret/Validate.js']; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('views/Secret.php');
require('templates/footer.php');
