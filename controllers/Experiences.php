<?php
// Here we are in the controller of Experiences

/*   Necessary Data   */
$title = '- Expériences'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Expériences'; // String of menu title
$link_gauche = 'Competences'; //Link of left arrow
$link_droite = 'Projets'; //Link of right arrow
$links = ['public/CSS/CSS_Experiences/Style_Experiences.css']; // Links of CSS
$scripts = []; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('views/Experiences.php');
require('templates/footer.php');
