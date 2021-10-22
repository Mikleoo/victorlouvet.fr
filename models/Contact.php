<?php
// This script manages the action after sending the "Contact" form
// It allows to send the mails and to check the security problems
include("Captcha.php");
include("Mail.php");

// On vérifie que la requête est bien en post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // On vérifie si le champ "recaptcha-response" contient une valeur
  if (empty($_POST['g-recaptcha-response'])) {
    header('Location: ../Contact&form=Captcha_Empty');
  } else {

    // Get data of Captcha
    $captcha=$_POST['g-recaptcha-response'];

    $cap = new Captcha;
    $responseKeys = $cap->validateCaptcha($captcha);
    if($responseKeys["success"]){

        if (empty($_POST['nom'])){
          header('Location: ../Contact&form=Nom');
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
          header('Location: ../Contact&form=Email');
        } elseif (empty($_POST['sujet'])){
          header('Location: ../Contact&form=Sujet');
        } elseif (empty($_POST['message'])) {
          header('Location: ../Contact&form=Message');
        } else {
          $nom = $_POST['nom'];
          $mail = $_POST['email'];
          $sujet = $_POST['sujet'];
          $message = $_POST['message'];
          $entreprise = $_POST['entreprise'];

          $mailer = new Mail;
          if ($mailer->SendMail('contact@victorlouvet.fr', 'contact@victorlouvet.fr', "Message de ". $nom, $mail, $message, $nom, $entreprise)) {
            if ($mailer->SendMail('contact@victorlouvet.fr', $mail, "Victor Louvet - Reponse automatique formulaire de contact", 'Merci d\'avoir remplie le formulaire, vous allez recevoir une réponse sous peu !', 'Ce site web a pour fonction de démontrer mes différentes compétences en tant que développeur web en général. Tout le code de ce site web a été réaliser à la main en vanilla (HTML, CSS, JS, PHP, outre les requête AJAX en JQUERY).', "", "")) {
              header('Location: ../Contact&form=True');
            } else {
              header('Location: ../Contact&form=False');
            }
          } else {
            header('Location: ../Contact&form=False');
          }

        }

    }
  }
} else {
  http_response_code(405);
  echo 'Methode non autorisee';
}
