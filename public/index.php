<?php
require '../autoload.php';
//$config = require '../conf/config.php';
$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../db/product-db.php';
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

