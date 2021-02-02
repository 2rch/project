<?php

require '../vendor/autoload.php';

use App\Models\Dbreader;
use App\Tools\logger\Logger;
use App\Controllers\Router;

session_start();
//$path = trim($_SERVER['REQUEST_URI'], '/');
//$products = require '../App/Database/product-db.php';
//$logger = new Logger();
$_SERVER['REQUEST_URI'] = 'details';

try {
    //$logger = new Logger();
    //$products = require '../App/Database/product-db.php';
    //$db = new Dbreader($products);
    //$product = $db->getByID(3);
    //echo implode(' ', $product);
    $router = new Router();
    $router->run();
    } catch (\Exception $error) {
    //$logger->warning($error, ['id' => 3]);
    echo $error;
}
