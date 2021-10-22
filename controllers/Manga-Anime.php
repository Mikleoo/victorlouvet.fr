<?php
// Here we are in the controller of Manga-Anime

/*   Necessary Data   */
$title = '- Manga-Anime'; // Next title of page (title view = Victor Louvet ???)
$title_h = 'h1'; // Hx of menu title
$nom_page = 'Manga-Anime'; // String of menu title
$link_gauche = 'Culture-Japonaise'; //Link of left arrow
$link_droite = 'Cuisine'; //Link of right arrow
$links = ['public/CSS/CSS_Slider/Slide.css', 'public/CSS/CSS_Triade/Triade.css', 'public/CSS/CSS_Triade/Triade_Manga.css']; // Links of CSS
$scripts = ['public/JS/JS_Slider/Slide.js', 'public/JS/JS_Triade/Image.js']; // Links of JS

/* Triade Data */
$UrlIconPlus = 'public/SVG/Triade/image-solid.svg';
$UrlImageConseil1 = 'public/IMG/Manga/victorlouvet-manga-Dandadan.jpg';
$UrlImageConseil2 = 'public/IMG/Manga/victorlouvet-manga-the-hunters-guild-red-hood.jpg';
$UrlImageConseil3 = 'public/IMG/Manga/victorlouvet-manga-kurogane-no-valhallian.jpg';
$UrlImageConseil1Plus1 = ['public/IMG/Manga/victorlouvet-manga-dandadan-exemple-1.jpg', 'public/IMG/Manga/victorlouvet-manga-dandadan-exemple-2.jpg', 'public/IMG/Manga/victorlouvet-manga-dandadan-exemple-3.jpg'];
$UrlImageConseil1Plus2 = ['public/IMG/Manga/victorlouvet-manga-the-hunters-guild-red-hood-exemple-1.jpg', 'public/IMG/Manga/victorlouvet-manga-the-hunters-guild-red-hood-exemple-2.jpg', 'public/IMG/Manga/victorlouvet-manga-the-hunters-guild-red-hood-exemple-3.jpg'];
$UrlImageConseil1Plus3 = ['public/IMG/Manga/victorlouvet-manga-kurogane-no-valhallian-exemple-1.jpg', 'public/IMG/Manga/victorlouvet-manga-kurogane-no-valhallian-exemple-2.jpg', 'public/IMG/Manga/victorlouvet-manga-kurogane-no-valhallian-exemple-3.jpg'];
$TitleDesc1 = ['Exemple de page', 'Exemple de page', 'Exemple de page'];
$TitleDesc2 = ['Exemple de page', 'Exemple de page', 'Exemple de page'];
$TitleDesc3 = ['Exemple de page', 'Exemple de page', 'Exemple de page'];

$TitreConseil1 = "Dandadan";
$TitreConseil2 = "The hunters guild red hood";
$TitreConseil3 = "Kurogane no valhallian";
$TextConseil1 = "Takakura, un garçon passionné par les complots mais qui ne croit pas aux fantômes, et Ayase, une fille bercée par les esprits mais qui ne croit pas aux extraterrestres, rencontrent un mystère dépassant leur entendement mutuel. S'ensuit une histoire d'ados occulte !";
$TextConseil2 = "Dans un monde terrorisé par les loups-garous, Velou veut sauver son village. Mais les villageois décident de chercher de l'aide extérieure et embauchent Grimm, une petite fille qui fait partie de la Guilde des Chasseurs. Velou devra faire équipe avec cet outsider pour devenir le héros qu'il veut être !";
$TextConseil3 = "3 ans après les invasions mongoles au Japon, le pays fait face aux conflits internes et à la pauvreté des terres. Souma, successeur de son clan, tente de survivre en ces temps troublés avec son fils Takemaru, de faible constitution. Accablé par la faim et l'épuisement, Souma se réveille dans une forêt d'une faune et flore luxuriante... Où est-il ? Où est son fils ? Qui sont ces guerriers qui l'assaillent ? Et cette fille qui se désigne comme... une Valkyrie !?";

/* Slider Data */
$UrlImgBackgroundSlide = 'public/IMG/Slide-Manga.png';//http://victorlouvet.fr/public/IMG/Slide-Manga.png
$UrlFlecheSlideGauche = 'public/SVG/Slide/victorlouvet-chevron-left-solid.svg';
$UrlFlecheSlideDroite = 'public/SVG/Slide/victorlouvet-chevron-right-solid.svg';
require('models/SQL/Form.php');
$form = new Form;
session_start();
if(isset($_SESSION['username'])) {
  if($_SESSION['username'] == "Mikleo"){
    array_push($scripts, 'public/JS/Ajax.js', 'public/JS/JS_Slider/AdminSlide.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
    $TabSlide = $form->getPassion("Manga", 0);
  } else {
    $TabSlide = $form->getPassion("Manga", 1);
  }
} else {
  $TabSlide = $form->getPassion("Manga", 1);
}

// ALL requires for the view
require('templates/header.php');
require('templates/menu.php');
require('templates/triade.php');
require('templates/slide.php');
require('templates/footer.php');
