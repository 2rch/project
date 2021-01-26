<?php
function Autoload($classname){
    $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
    require $path;
}
spl_autoload_register('Autoload');
