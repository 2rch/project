<?php
require '../autoload.php';

use \Models\Dbreader;
use \Tools\logger\Logger;
use \Tools\TemplateRender;
use \Tools\Exceptions\IdException;
//$config = require '../Config/config.php';
$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../Database/product-db.php';
$logger = new Logger();
try
{
    $db = new Dbreader($products);
    $product = $db->getByID(8);
    echo implode($product);
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');
}
catch (\Exception $error){
    $logger->warning($error, ['id' => 8]);
    echo $error;
}

