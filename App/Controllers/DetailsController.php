<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Tools\TemplateRender;

class DetailsController extends Controller
{
    public function indexAction()
    {
        $renderer = new TemplateRender();
        $renderer->render('details', 'header', 'footer');
    }
}
