<?php
namespace Tools;
class TemplateRender
{

    public function render(string $main, string $header, string $footer)
    {
        $templatePath = __DIR__ . '/../Views/';
        ob_start();
        require_once $templatePath . $main . '.php';
        $content = ob_get_clean();
        require_once $templatePath . $header . '.php';
        require_once $templatePath . $footer . '.php';
    }
    
}
