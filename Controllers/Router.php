<?php
namespace controllers;
class Router{
    protected  $routes = [];
    protected $params = [];
    public function __construct(){
        $arr = require '../Config/routes.php';
        foreach ($arr as $key => $val){
            $this->addRoute($key, $val);
        }
    }
    public function addRoute($route, $params){
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }
    public function match(){
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach($this->routes as $route => $params){
            if (preg_match($route, $url, $matches)){
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function run(){
        if ($this->match()){
            $controller = 'Controllers\\' . ucfirst($this->params['controller']) . 'Controller.php';
            echo $controller;
        }
    }
}