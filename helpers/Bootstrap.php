<?php

class Bootstrap{
    public static function createApp(){

        include 'routing.php';
        $query = [''];
        if (isset($_GET['q'])){
            $query = explode('/', $_GET['q']);
        };

       $route = Route::getByName($query[0]);

        Route::dispatch($route);
    }


}