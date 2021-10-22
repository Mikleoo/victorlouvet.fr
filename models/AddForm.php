<?php
// This script manages the action after sending the "Secret" form
// It allows to update the database, to send mails and to check the security problems

ob_start();
include("SQL/Form.php");
include("Captcha.php");
include("Mail.php");

// On vérifie que la requête est bien en post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // On vérifie si le champ "recaptcha-response" contient une valeur
  if (empty($_POST['g-recaptcha-response'])) {
    header('Location: ../Secret&form=Captcha_Empty');
    exit;
  } else {

    // Get data of Captcha
    $captcha=$_POST['g-recaptcha-response'];
    $cap = new Captcha;
    $responseKeys = $cap->validateCaptcha($captcha);

    if($responseKeys["success"]){

      if (!empty($_POST['email'])) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
          header('Location: ../Secret&form=Email');
          exit;
        }
      }
      if (empty($_POST['pseudo'])){
        header('Location: ../Secret&form=Pseudo');
        exit;
      } elseif (empty($_POST['conseil'])){
        header('Location: ../Secret&form=Conseil');
        exit;
      } elseif (empty($_POST['manga-cuisine'])) {
        header('Location: ../Secret&form=Passion');
        exit;
      } else {
        $mail = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $conseil = $_POST['conseil'];
        $passion = $_POST['manga-cuisine'];

        if ($passion == "Cuisine" || $passion == "Manga") {
          $form = new Form;
          $resultatPassion = $form->getPassion($passion, 1);
          for ($i = 0; $i < count($resultatPassion) ; $i++) {
              if (isset($resultatPassion[$i])) {
                  if (isset($resultatPassion[$i][name_manga])) {
                    if ($resultatPassion[$i][name_manga] == $conseil) {
                        header('Location: ../Secret&form=PassionExist');
                        exit;
                    }
                  } else {
                    if ($resultatPassion[$i][name_cuisine] == $conseil) {
                        header('Location: ../Secret&form=PassionExist');
                        exit;
                    }
                  }
              }
          }
          $resultat = $form->setConseil($passion, $mail, $pseudo, $conseil);

          $mailer = new Mail;
          if ($mailer->SendMail('contact@victorlouvet.fr', 'contact@victorlouvet.fr', "Une slide est à valider !", "Une slide est à valider !", $conseil, $pseudo, $passion)) {
            if (!empty($mail)) {
                if ($mailer->SendMail('contact@victorlouvet.fr', $mail, "Victor Louvet - Reponse automatique formulaire de conseil", 'Merci d\'avoir remplie le formulaire, vous allez recevoir une réponse sous peu !', 'Une vérification manuel va d\'abord avoir lieu pour ensuite être poster sur le site ! Vous allez être prévenue par mail lorsque la slide aura été vérifiée manuellement. Merci de contribuer à l\'avancée de mon site web !', "", "")) {
                  header('Location: ../Secret&form=True');
                  exit;
                } else {
                  header('Location: ../Secret&form=False');
                  exit;
                }
            }
          } else {
            header('Location: ../Secret&form=False');
            exit;
          }

        } else {
          header('Location: ../Secret&form=Passion');
          exit;
        }
        header('Location: ../Secret&form=True');
        exit;
      }

    } else {
      header('Location: ../Secret&form=Captcha_False');
      exit;
    }
  }
} else {
  http_response_code(405);
  echo 'Methode non autorisee';
}
