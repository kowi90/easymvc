<?php

class BaseController{

    public function getView($viewName, $parameters = []){

        foreach ($parameters as $key => $parameter){
            $$key = $parameter;
        }
        include './views/'.$viewName.'.php';
    }

}
?>