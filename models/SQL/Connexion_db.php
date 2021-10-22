<?php
if (strpos($_SERVER['SCRIPT_NAME'], "index")) {
    include_once("configuration.php");
} elseif (strpos($_SERVER['SCRIPT_NAME'], "administrator")) {
    include_once("../../configuration.php");
} else {
    include_once("../configuration.php");
}

class Connexion {
    // Connection to the database
    protected function connexionDB() {

        if (extension_loaded ('PDO')) {
          $config = new Config;
          $dsn = $config->dbtype . ':host='. $config->host .';dbname='. $config->dbname .';port='. $config->dbport .';charset='. $config->dbcharset .'';
          try {
              $pdo = new PDO($dsn, $config->user , $config->password);
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              return $pdo;
          } catch(Exception $e) {
              die('Erreur : '.$e->getMessage());
          }
        } else {
            echo 'PDO KO';
        }
    }
}
