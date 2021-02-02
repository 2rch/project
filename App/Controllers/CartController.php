<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Tools\TemplateRender;

class CartController extends Controller
{
    public function indexAction()
    {
        $renderer = new TemplateRender();
        $renderer->render('cart', 'header', 'footer');
    }
}
