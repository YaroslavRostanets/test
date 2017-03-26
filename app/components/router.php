<?php
class Router {
    private $routes;

    public function __construct(){
        $routePath = ROOT.'config/routes.php';
        $this->routes = include($routePath);
    }

    public function getURL(){
        if( !empty($_SERVER['REQUEST_URI']) ){
            $uri = trim($_SERVER['REQUEST_URI'], '/');
            return $uri;
        }
    }

    public function run(){
        $uri = $this->getURL();

        foreach ($this->routes as $uriPattern => $path) {
            if(preg_match("~$uriPattern~", $uri)){
                $segments = explode('/', $path);
                $ctrlName = array_shift($segments).'Ctrl';
                $actionName = array_shift($segments);


                $controllerFile = ROOT.'controllers/'.$ctrlName.'.php';


                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                $ctrlObject = new $ctrlName;

                $ctrlObject->$actionName();


                $result = $ctrlObject->actionName();

                if( $result != null ){
                    break;
                }


            }
        }


    }

}
?>