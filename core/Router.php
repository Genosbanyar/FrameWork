<?php
class Router{
    protected $routes = [
        "GET"=>[],
        "POST"=>[]
    ];

    public static function load($fileName){
        $routes = new Router;
        require $fileName;
        return $routes;
    }

    public function register($routes){
        $this->routes = $routes;
    }

    public function get($uri, $controller){
       $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri]=$controller;
    }

    public function direct($uri, $method){
        //PagesController@home
        if(!array_key_exists($uri, $this->routes[$method])){
            die("404 page");
        }
        $pages = $this->routes[$method][$uri];
        $explosion = explode("@",$pages);
        $method = $explosion[1];
        $class = new $explosion[0];
        return $class->$method();
    }

};
