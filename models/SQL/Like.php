<?php
include_once("Connexion_db.php");

// This class contains all the data access functions for like button
class Like extends Connexion {

  // Get the number of likes in the database
  function getNombreJaime() {
      $db = $this->connexionDB();
      $nombre_jaime = $db->prepare("CALL getLike");
      $nombre_jaime->execute();
      $nombre_jaime = $nombre_jaime->fetch();
      return $nombre_jaime[0];
  }

  // Add or remove a like in the database
  function AddJaime($change) {
      $db = $this->connexionDB();
      $add = $db->prepare("CALL changeLike(:change)");
      $resultat = $add->execute(array(':change' => $change));
      $add->closeCursor();
      return $resultat;
  }
}
