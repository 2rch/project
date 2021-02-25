<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Tools\TemplateRender;

class CartController extends Controller
{
    public function index()
    {
        $renderer = new TemplateRender();
        $renderer->render('cart', 'header', 'footer');
    }
}
