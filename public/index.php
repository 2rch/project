<?php

require '../vendor/autoload.php';

use App\Models\Dbreader;
use Monolog\Logger;
//use App\Tools\logger\Logger;
use App\Tools\TemplateRender;

//$config = require '../App/Config/config.php';
$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../App/Database/product-db.php';
$logger = new Logger('name');
$router = new \App\Controllers\Router;
$router->run();

try {
    $db = new Dbreader($products);
    $product = $db->getByID(2);
    //echo implode($product);
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');
} catch (\Exception $error) {
    $logger->warning($error, ['id' => 2]);
    echo $error;
}
