<?php
namespace App\Controllers;

class Router
{
    protected $routes = [];
    protected $params = [];
    public function __construct()
    {
        $arr = require '../App/Config/routes.php';
        foreach ($arr as $key => $val)
        {
            $this->addRoute($key, $val);
        }
    }

    public function addRoute($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }
    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params)
        {
            if (preg_match($route, $url, $matches))
            {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function run()
    {
        if ($this->match())
        {
            //$controller = 'Controllers\\' . ucfirst($this->params['controller']) . 'Controller.php';
            $path = 'App\Controllers\\' . ucfirst($this->params['controller'] . 'Controller');
            if (class_exists($path))
            {
                $action = $this->params['action'];
                if (method_exists($path, $action))
                {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    echo 'Не найден action: ' . $action;
                }

            } else {
                echo 'Не найден controller:' . $path;
            }
        }
        else echo 'Путь не найден.';
    }
}
