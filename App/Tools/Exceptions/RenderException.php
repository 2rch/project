<?php

namespace App\Tools\Exceptions;

class RenderException extends \Exception
{
    public function errorMessage(): string
    {
        return 'Render Exception: <p>' . $this->getMessage() . '</p>';
    }
}