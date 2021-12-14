<?php
// Here we are in the controller of Accueil

// Number of "likes" which are stored in database
require('models/SQL/Like.php');
$like = new Like;
$nombre_jaime = $like->getNombreJaime();

/*   Necessary Data   */
$title = ''; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h2'; // Hx of menu title
$nom_page = 'Accueil'; // String of menu title
$link_gauche = 'Contact'; //Link of left arrow
$link_droite = 'Competences'; //Link of right arrow
$links = ['public/CSS/CSS_Accueil/Fond.css',
'public/CSS/CSS_Accueil/Style_Accueil.css']; // Links of CSS
$scripts = ['public/JS/JS_Accueil/ScriptEcriture.js',
'public/JS/JS_Accueil/Title.js',
'public/JS/JS_Accueil/Like.js',
'public/JS/JS_Accueil/Accueil_OnLoad.js',
'public/JS/AnimationMenu.js',
'public/JS/Ajax.js',
'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js']; // Links of JS

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('views/Accueil.php');
require('templates/footer.php');
