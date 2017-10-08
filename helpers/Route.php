<?php

class Route {

    public static $routeList;

    public static function add($name, $controller, $method){
        self::$routeList[] = [
            'name' => $name,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public static function getByName($name){
        $route = [
            'name' => '',
            'controller' => '',
            'method' => ''
        ];

        foreach (self::$routeList as $item) {
            if ($item['name'] == $name){
                $route = $item;
            }
        }
        return $route;
    }

    public static function dispatch($route, $arg, $arg2){
        if (!count($route)){
            echo "";
        }
        include './controllers/'.$route['controller'].'.php';
        $controller = new $route['controller'];
        $method = $route['method'];
        if ($arg2 !== ''){
            $controller->$method($arg, $arg2);
            return;
        }

        if ($arg !== ''){
            $controller->$method($arg);
            return;
        }

        $controller->$method();
    }

}