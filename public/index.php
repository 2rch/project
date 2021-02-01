<?php
require '../autoload.php';

use \Models\Dbreader;
use \Tools\logger\Logger;
use \Tools\TemplateRender;
use \Controllers\Router;


//$config = require '../Config/config.php';
//$path = trim($_SERVER['REQUEST_URI'], '/');
//$_SERVER['REQUEST_URI'] = '/account/register';
try
{
    $products = require '../Database/product-db.php';
    $logger = new Logger();
    $db = new Dbreader($products);
    $product = $db->getByID(3);
    echo implode(' ', $product);
    $router = new Router();
    $router->run();
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');

}
catch (\Exception $error){
    $logger->warning($error, ['id' => 3]);
    echo $error;
}

