<?php
namespace app\core;

class Core {
    public function __construct() {
        $this->run();
    }

    private function run() {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);

        if(isset($uri[1])) {
            $controller = $uri[1];

            if(isset($uri[2])) {
                $method = $uri[2];
            }

            if(isset($uri[3])) {
                $param = $uri[3];
            }

            if($uri[1] == '') {
                $controller = "home";
                $method = "index";
            }
        }

        $className = "app\\controllers\\" . $controller . "controller";
        $error404 = "app\\controllers\\erro404";
        // Verifica se a classe existe
        if(class_exists($className)) {
            $controllerInstance = new $className;

            if(isset($method)) {
                if(method_exists($controllerInstance, $method) && !isset($param)) {
                    $controllerInstance->$method($method);
                } else if(!method_exists($controllerInstance, $method)){
                    $errorController = new $error404;
                    return;
                }
                if(isset($param)){
                    $controllerInstance->$method($method,$param);
                }
            } else {
                $controllerInstance->index();
            }
        } else {
            
            $errorController = new $error404;
        }
    }
}
