<?php
// Here we are in the controller of Cuisine

/*   Necessary Data   */
$title = '- Cuisine'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Cuisine'; // String of menu title
$link_gauche = 'Manga-Anime'; //Link of left arrow
$link_droite = 'Contact'; //Link of right arrow
$links = ['public/CSS/CSS_Slider/Slide.css', 'public/CSS/CSS_Triade/Triade.css', 'public/CSS/CSS_Triade/Triade_Cuisine.css']; // Links of CSS
$scripts = ['public/JS/JS_Slider/Slide.js', 'public/JS/JS_Triade/Image.js']; // Links of JS

/* Triade Data */
$UrlIconPlus = 'public/SVG/Triade/image-solid.svg';
$UrlImageConseil1 = 'public/IMG/Cuisine/victorlouvet-ramen.jpg';
$UrlImageConseil2 = 'public/IMG/Cuisine/victorlouvet-naan.jpg';
$UrlImageConseil3 = 'public/IMG/Cuisine/victorlouvet-pizza.jpg';
$UrlImageConseil1Plus1 = ['public/IMG/Cuisine/victorlouvet-ramen-nouille.jpg'];
$UrlImageConseil1Plus2 = ['public/IMG/Cuisine/victorlouvet-naan-cuisson.jpg'];
$UrlImageConseil1Plus3 = ['public/IMG/Cuisine/victorlouvet-pizza-cuisson-pâte-fine.jpg'];
$TitleDesc1 = ['Fabrication des nouilles'];
$TitleDesc2 = ['Cuisson des naans'];
$TitleDesc3 = ['Pizza pâte fine'];

$TitreConseil1 = "Japonaise";
$TitreConseil2 = "Indienne";
$TitreConseil3 = "Italienne";
$TextConseil1 = 'La cuisine Japonaise est ma cuisine préférée, étant plongée dans l\'univers du japon depuis tout petit, les plats typiques japonais m\'ont toujours intéressé. Les Ramen étant un des plats far du Japon, c\'est vers celui-ci que je me suis le plus tournée avec ses milliers de déclinaisons différentes, on y revient toujours ! Shoyu (soja), Miso (pâte de haricots), Shio (fruit de mer), Tonkotsu (bouillon d\'os de porc) et plein d\'autres, c\'est sa diversité qui en fait sa force !';
$TextConseil2 = 'La cuisine indienne est incroyable au niveau des épices mais le naan reste mon préféré ! On peut se dire que ce n\'est qu\'un pain mais il est en réalité bien plus que ça ! Il peut être dérivé avec du fromage, des herbes, de l\'ail et surement plein d\'autres choses. Sa méthode de fabrication est aussi super-intéressante, avec une cuisson collée à une paroi au bord du feu !';
$TextConseil3 = 'La pizza ! Et plus précisément, la vraie pizza napolitaine avec les bords gonflés et aérés ! Surement un des plats le plus connu en France et appréciée, il n\'empêche que ce plat peut se décliner en une infinité de versions mais la pâte reste à peu près la même. On retrouve souvent des pizzas à pâte épaisse comme dans les boulangeries ou encore des pizzas "normales" dans la plupart des pizzerias mais la vraie pizza napolitaine, elle se fait rare en France !';

/* Slider Data */
$UrlImgBackgroundSlide = 'public/IMG/Slide-Cuisine.png';//http://victorlouvet.fr/public/IMG/Slide-Manga.png
$UrlFlecheSlideGauche = 'public/SVG/Slide/victorlouvet-chevron-left-solid.svg';
$UrlFlecheSlideDroite = 'public/SVG/Slide/victorlouvet-chevron-right-solid.svg';
require('models/SQL/Form.php');
$form = new Form;
session_start();
if(isset($_SESSION['username'])) {
  if($_SESSION['username'] == "Mikleo"){
    array_push($scripts, 'public/JS/Ajax.js', 'public/JS/JS_Slider/AdminSlide.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
    $TabSlide = $form->getPassion("Cuisine", 0);
  } else {
    $TabSlide = $form->getPassion("Cuisine", 1);
  }
} else {
  $TabSlide = $form->getPassion("Cuisine", 1);
}

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('templates/triade.php');
require('templates/slide.php');
require('templates/footer.php');
