<?php
ob_start();
include("SQL/Slide.php");
include("Mail.php");

// Executed when the Validate button is clicked thanks to the ajax in JS/JS_SLider/Slide.js
if (isset($_POST['id']) || isset($_POST['passion']) || isset($_POST['bool'])) {

  $mailer = new Mail;
  $slide = new Slide;
  $res = $slide->getMailById($_POST['id'], $_POST['passion']);

  if ($_POST['bool'] == "true") {

    $slide->validateConseil($_POST['id'], $_POST['passion']);
    if (isset($res[0][mail]) && !empty($res[0][mail])) {
        if($mailer->SendMail('contact@victorlouvet.fr', $res[0][mail], "Victor Louvet - Votre slide est valide", "Votre slide est valide !", "Votre slide a été validé vous pouvez le voir sur le site web dans la page ". $_POST['passion'], "", "")) {
          return true;
        } else {
          return false;
        }
    }

  } elseif ($_POST['bool'] == "false") {

    $slide->archivedConseil($_POST['id'], $_POST['passion']);
    if (isset($res[0][mail]) && !empty($res[0][mail])) {
        if ($mailer->SendMail('contact@victorlouvet.fr', $res[0][mail], "Victor Louvet - Votre slide n\'est pas valide, il est archive !", "Victor Louvet - Votre slide n\'a pas été valider mais archivé !", "Votre slide a été archiver (non publiée) car considérée comme non-conforme par le propriétaire du site web. Si vous souhaiter demander réclamation, addressez vous à contact@victorlouvet.fr", "", "")) {
          return true;
        } else {
          return false;
        }
    }

  }
}
