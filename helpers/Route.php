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

    public static function dispatch($route){
        if (!count($route)){
            echo "";
        }
        include './controllers/'.$route['controller'].'.php';
        $controller = new $route['controller'];
        $method = $route['method'];
        $controller->$method();
    }

}