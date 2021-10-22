<?php
// Here we are in the controller of Contact
include_once("configuration.php");

/*   Necessary Data   */
$title = '- Contact'; // Next title of page (title view = Victor Louvet - ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Contact'; // String of menu title
$link_gauche = 'Cuisine'; //Link of left arrow
$link_droite = 'Accueil'; //Link of right arrow
$links = ['public/CSS/CSS_Contact/Style_Contact.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css']; // Links of CSS
$scripts = ['public/JS/JS_Contact/Validate.js']; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('views/Contact.php');
require('templates/footer.php');
