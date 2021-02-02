<?php

namespace App\Controllers;

abstract class Controller
{
    public $route;
    public function __construct($route)
    {
        $this-> route = $route;
    }
}
