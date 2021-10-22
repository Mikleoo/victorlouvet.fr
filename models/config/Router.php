<?php

// This class contains the functions allowing to register the routes to my controllers
// and depending on the url received to redirect the user to the desired route
class Router {

    private $routes;
    private static $instance;

    private function __construct() {
        $this->routes = array();
        $this->addRoute('GET', '/Conseils', 'controllers/Conseils');
        $this->addRoute('GET', '/', 'controllers/Accueil');
        $this->addRoute('GET', '/Accueil', 'controllers/Accueil');
        $this->addRoute('GET', '/Competences', 'controllers/Competences');
        $this->addRoute('GET', '/Experiences', 'controllers/Experiences');
        $this->addRoute('GET', '/Projets', 'controllers/Projets');
        $this->addRoute('GET', '/Culture-Japonaise', 'controllers/Culture-Japonaise');
        $this->addRoute('GET', '/Cuisine', 'controllers/Cuisine');
        $this->addRoute('GET', '/Manga-Anime', 'controllers/Manga-Anime');
        $this->addRoute('GET', '/Contact', 'controllers/Contact');
        $this->addRoute('GET', '/Secret', 'controllers/Secret');
        $this->addRoute('GET', '/Connexion', 'administrator/controllers/connexion');
        $this->addRoute('GET', '/Mentions-Legales', 'controllers/Mentions-Legales');
    }
    
    private function __clone() {}

    private function addRoute($method, $route, $controller) {
        array_push($this->routes, array(
            'method' => $method,
            'route' => $route,
            'controller' => $controller
        ));
    }

    private function badReqResponse() {
        return require_once('controllers/404.php');
    }

    private function importController($route) {
        return require_once($route['controller'].'.php');
    }

    public function checkRoute($method, $uri) {
        $isReqValid = false;
        foreach($this->routes as $route) {
            if($route['method'] == $method && $route['route'] == $uri) {
                $validRoute = $route;
                $isReqValid = true;
                break;
            }
        }
        return $isReqValid ? $this->importController($validRoute) : $this->badReqResponse();
    }

    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new Router();
        }
        return self::$instance;
    }
}
