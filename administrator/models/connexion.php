<?php
include("SQL/ConnexionAdmin.php");

if(isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)){
    header('Location: ../../Connexion&con=False');
  } else {
      $con = new ConnexionAdmin;
      $res = $con->Admin($username);
      if ($res !== false) {
          if(password_verify($password, $res[mot_de_passe])) {
              session_start();
              $_SESSION['username'] = $username;
              header('Location: ../../Accueil');
          } else {
              header('Location: ../../Connexion&con=False');
          }
      } else {
          header('Location: ../../Connexion&con=False');
      }
  }
} else {
  header('Location: ../../Connexion&con=False');
}
