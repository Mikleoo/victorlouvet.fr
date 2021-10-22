<?php
// Here we are in the controller of Projets

/*   Necessary Data   */
$title = '- Projets'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Projets'; // String of menu title
$link_gauche = 'Experiences'; //Link of left arrow
$link_droite = 'Culture-Japonaise'; //Link of right arrow
$links = ['public/CSS/CSS_Projets/Style_Projets.css', 'public/CSS/CSS_Triade/Triade.css']; // Links of CSS
$scripts = ['public/JS/JS_Triade/Script_Projets.js']; // Links of JS

/* Triade Data */
$UrlIconPlus = 'public/SVG/Triade/github-square-brands.svg';
$UrlImageConseil1 = 'public/IMG/Projets/victorlouvet-projet-site-web.jpg';
$UrlImageConseil2 = 'public/IMG/Projets/victorlouvet-projet-jeu-frognflies.jpg';
$UrlImageConseil3 = 'public/IMG/Projets/victorlouvet-projet-react-native.jpg';
$UrlImageConseil1Plus1 = [''];
$UrlImageConseil1Plus2 = [''];
$UrlImageConseil1Plus3 = [''];
$TitleDesc1 = ['Lien GitHub Site Web'];
$TitleDesc2 = ['Lien GitHub Jeu Web'];
$TitleDesc3 = ['Lien GitHub App Mobile'];

$TitreConseil1 = "Ce site web !";
$TitreConseil2 = "Le FrogNFlies";
$TitreConseil3 = "Mon App Mobile en React Native";
$TextConseil1 = "Ce site web est mon plus gros projet personnel car il complète presque toutes mes compétences de développeur web ! Créé en vanilla avec une architecture MVC optimisée, ce site a été créé en prenant en compte toutes les actions d'un vraie projet professionnel (Conception, maquettage, schématisation, architecture, objet, responsive, optimisation, commentaire, sécurité, maintenable, adaptable, SEO...). Il comporte des fonctionnalités simples de front (responsive, animation...) comme de back (espace commentaire, bouton j'aime, mailer...) que l'on retrouve communément sur le web mais de manière optimisée et compris.";
$TextConseil2 = "Le FrogNFlies est un projet réalisé en groupe lors de ma 3ème année d'études supérieures. Ce projet est un jeu web composé de cases dans lesquels une grenouille doit aller manger les mouches en évitant les obstacles. Le but de ce projet était de le réaliser en typescript pour permettre un typage fort, nous n'avons donc pas pris le temps de l'adapter correctement de manière responsive mais la logique du jeu permet de prouver mes compétences en tant que développeur JS (+Typescript).";
$TextConseil3 = "Ce projet est née d'un besoin de ce site web. Je dois valider manuellement des commentaires dans ce site et aller sur le côté admin pour le faire. Mais cela représentait trop d'étapes pour que ce soit valable dans le temps. J'ai donc voulu créer une app mobile pour connaitre mes commentaires à valider et ainsi gagner du temps. J'ai donc choisi de la créer avec React Native car j'avais déjà fait du React avant et cela me permettait d'avoir l'app en cross plateforme. J'ai donc réussi à afficher les commentaires à valider sur mon app en les prenant depuis ma propre mini API du site.";


// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('templates/triade.php');
require('templates/footer.php');
