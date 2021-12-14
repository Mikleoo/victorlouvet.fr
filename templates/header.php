<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="CV développeur web junior Victor Louvet : développement de sites, applications web. JS, TypeScript, React, PHP, SQL, MVC, Bootstrap, SEO, Conception." />
  <meta name="keywords" content="Victor Louvet, Victor Louvet cv, cv dev, cv developpeur, cv developpeur web, cv developpeur junior, cv développeur, cv développeur web, cv développeur junior" />
  <link rel="stylesheet" href="public/CSS/Style_LouvetVictor.css">
  <link rel="stylesheet" href="public/CSS/Style_Menu.css">
  <link rel="stylesheet" href="public/CSS/Style_Footer.css">
  <?php
  for($i=0; $i < count($links) ; $i++) {
    echo '<link rel="stylesheet" href="'. $links[$i] .'">'. "\n  " .'';
  }
  echo "\n";
  ?>
  <script src="public/JS/OnLoad.js"></script>
  <script src="public/JS/Menu.js"></script>
  <script src="public/JS/Footer.js"></script>
  <?php
  for($i=0; $i < count($scripts) ; $i++) {
    echo '<script src="'. $scripts[$i]. '"></script>'. "\n  " .'';
  }
  echo "\n";
  ?>
  <title>Victor Louvet - CV Développeur Web <?= $title ?></title>
</head>

<body>

  <?php
    if(isset($_SESSION['username'])) {
      if($_SESSION['username'] == "Mikleo"){
          echo "Bonjour " . $_SESSION['username'] . ", vous êtes connecté";
      }
    }
  ?>
