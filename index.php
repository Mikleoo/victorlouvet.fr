<?php
// index.php is the 1st file to which the user is redirected, it will call the bootstrap and router classes to work the url

require_once('configuration.php');
// Force Https
$config = new Config;
if ($config->forcehttps) {
  if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
      //header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
      header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
      exit();
  }
}

require_once('models/config/Boostrap.php');
$bootstrap = Bootstrap::getInstance();
$bootstrap->route();
