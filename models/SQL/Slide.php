<?php
include_once("Connexion_db.php");

// This class contains all the data access functions for the functions of the slider
class Slide extends Connexion {

  function validateConseil($id, $passion) {
    $db = $this->connexionDB();
    $addPassion = $db->prepare("CALL validateConseil(:passion, :id)");
    $resultat = $addPassion->execute(array(':passion' => $passion,':id' => $id));
    $addPassion->closeCursor();
    return $resultat;
  }

  function archivedConseil($id, $passion) {
    $db = $this->connexionDB();
    $addPassion = $db->prepare("CALL archivedConseil(:passion, :id)");
    $resultat = $addPassion->execute(array(':passion' => $passion,':id' => $id));
    $addPassion->closeCursor();
    return $resultat;
  }

  function getMailById($id, $passion) {
    $db = $this->connexionDB();
    $getMail = $db->prepare("CALL getMailById(:passion, :id)");
    $getMail->execute(array(':passion' => $passion,':id' => $id));
    $resultat = $getMail->fetchAll();
    $getMail->closeCursor();
    return $resultat;
  }

}
