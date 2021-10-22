<?php
include_once("../configuration.php");

// Function that checks a captcha
class Captcha {

  public function validateCaptcha($captcha) {
    $config = new Config;
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. urlencode($config->secretkey) .'&response='. urlencode($captcha);
    $response = file_get_contents($url);

    // On décode le JSON renvoyer par google
    return $responseKeys = json_decode($response, true);

    /*
    //If we want return only succes (true or false)
    return $responseKeys["success"];
    */
  }

}
