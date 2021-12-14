<?php
require_once('models/config/Router.php');

// This class is used to manage the address retrieved from the user and transform it into something usable
// It's a singleton to allow only one instance, 
class Bootstrap {
    
    private $router;
    private $requestUrl;
    private $method;
    private static $instance;

    private function __construct() {
        $this->router = Router::getInstance();
        $this->requestUrl = $_REQUEST['url'];
        $this->requestUrl = '/'.filter_var(
            $this->requestUrl, FILTER_VALIDATE_REGEXP,
            array('options' => array("regexp"=>"/^[a-zA-Z0-9_\/\-\&\=]*$/"))
            );
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    private function __clone() {}

    public function route() {
        return $this->router->checkRoute($this->method, $this->requestUrl);
    }

    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new Bootstrap;
        }
        return self::$instance;
    }
    
}
