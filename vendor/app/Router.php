<?php

namespace app;
class Router {
    static public function init(){
        $path = $_SERVER[REQUEST_URI];
        $url_components = explode('/', $path);
        array_shift($url_components);
        $controller = strtolower($url_components[0]);
        $action = strtolower($url_components[1]);
        $controller_class="\controllers\\".ucfirst($controller);
        if(!class_exists($controller_class)){
            self::pageNotFound();
        }
        $controller = new $controller_class();
        if(!method_exists($controller, $action)){
            self::pageNotFound();
        }
        $controller->action();
    }
    
    static public function pageNotFound(){
        exit('lol 404');
    }
}
