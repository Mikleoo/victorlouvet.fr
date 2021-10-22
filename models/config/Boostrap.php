<?php
require_once('models/config/Router.php');

// This class is used to manage the address retrieved from the user and transform it into something usable
// It's a singleton to allow only one instance
class Bootstrap {

    private $uri;
    private $method;
    private $router;
    private $marqueurDebutLien;
    private $debutLien;
    private $finLien;
    private $leLien;
    private static $instance;

    private function __construct() {
        $this->router = Router::getInstance();
        $this->marqueurDebutLien = 'url=';
        $this->debutLien = strpos( $_SERVER['REDIRECT_QUERY_STRING'], $this->marqueurDebutLien ) + strlen( $this->marqueurDebutLien );
        $this->marqueurFinLien = '&';
        $this->finLien = strpos( $_SERVER['REDIRECT_QUERY_STRING'], $this->marqueurFinLien );
        $this->leLien = substr( $_SERVER['REDIRECT_QUERY_STRING'], $this->debutLien, $this->finLien ? $this->finLien - $this->debutLien : strlen( $_SERVER['REDIRECT_QUERY_STRING'] ));
        $this->uri = '/'.filter_var(
            $this->leLien, FILTER_VALIDATE_REGEXP,
            array('options' => array("regexp"=>"/^[a-zA-Z0-9_\/\-\&\=]*$/"))
        );
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
    private function __clone() {}

    public function route() {
        return $this->router->checkRoute($this->method, $this->uri);
    }

    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new Bootstrap;
        }
        return self::$instance;
    }
}
