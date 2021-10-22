<?php
include_once("Connexion_db.php");

// This class contains all the data access functions for user advice
class Form extends Connexion {

  function getPassion($passion, $verify) {
    $db = $this->connexionDB();
    $getPassion = $db->prepare("CALL getPassion(:passion, :verify)");
    $getPassion->execute(array(':passion' => $passion, ':verify' => $verify));
    $passion = $getPassion->fetchAll();
    $getPassion->closeCursor();
    return $passion;
  }

  function setConseil($passion, $mail, $pseudo, $conseil) {
    $db = $this->connexionDB();
    $addPassion = $db->prepare("CALL setPassion(:passion, :mail, :pseudo, :conseil)");
    $resultat = $addPassion->execute(array(':passion' => $passion,':mail' => $mail, ':pseudo' => $pseudo, ':conseil' => $conseil));
    $addPassion->closeCursor();
    return $resultat;
  }

}
