<?php
    require "config.php";
    $url = isset($_GET["url"]) ? $_GET["url"] : "Index/index";
    $url = explode("/",$url);
    //esta aparicion
    //que necesitamos
    // por lo tanto nuestrov vector $url tendra
    // y el nameMethod en su segunda posicion
    $controller = "";
    $method = "";
    if(isset($url[0]))
        $controller = $url[0];
    if(isset($url[1]) && $url[1] != "")
        $method = $url[1];

    spl_autoload_register(function($class){
        if(file_exists(LB.$class . ".php")){
            require LB.$class . ".php";
        }
        
    });
    require 'Controllers/Error.php';
    $error= new Errors();
    $controllerPath ="Controllers/" . $controller .'.php';

    if(file_exists($controllersPath)){
        require $controllersPath;
        $controller = new $controller();

        if(isset($method)){

            if(method_exists($controller, $method))
                $controller->{$method}();
            else
                $error->error();
        }
    } else 
        $error -> error();