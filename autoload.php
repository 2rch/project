<?php

function Autoload($classname){
    $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
    if(file_exists($path))
    require $path;
}
spl_autoload_register('Autoload');
