<?php

namespace App\Tools;

use App\Tools\Exceptions\PathException;
use App\Tools\Exceptions\RenderException;

class TemplateRender
{
    public function render(string $main, string $header, string $footer)
    {
        $templatePath = __DIR__ . '/../Views/';
        if (empty($header) || empty($footer) || empty($main))
        {
            throw new RenderException('Template Render working with three params.');
        }
        ob_start();
        if (!file_exists($templatePath . $main . '.php'))
        {
            throw new PathException('File not found');
        }
        require_once $templatePath . $main . '.php';
        $content = ob_get_clean();
        require_once $templatePath . $header . '.php';
        require_once $templatePath . $footer . '.php';
    }
}
