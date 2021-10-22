<?php
// Here we are in the controller of Competence

/*   Necessary Data   */
$title = '- Compétences'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Compétences'; // String of menu title
$link_gauche = 'Accueil'; //Link of left arrow
$link_droite = 'Experiences'; //Link of right arrow
$links = ['public/CSS/CSS_Competence/Style_Competence.css']; // Links of CSS
$scripts = []; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('views/Competence.php');
require('templates/footer.php');
