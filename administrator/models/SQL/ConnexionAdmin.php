<?php
include("../../models/SQL/Connexion_db.php");

class ConnexionAdmin extends Connexion {

  function Admin($username) {
    $db = $this->connexionDB();
    $connexionAdmin = $db->prepare("CALL connexion(:username)");
    $connexionAdmin->execute(array(':username' => $username));
    $res = $connexionAdmin->fetch();
    $connexionAdmin->closeCursor();
    return $res;
  }

  /*
  function AddAdmin($username, $password) {
      $db = $this->connexionDB();
      $connexionAdmin = $db->prepare("INSERT INTO `utilisateurs` VALUES (:username, :password)");
      $connexionAdmin->execute(array(':username' => $username, ':password' => $password));
      $res = $connexionAdmin->fetch();
      $connexionAdmin->closeCursor();
      return $res;
  }
  */

}
