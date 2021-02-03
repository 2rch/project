<?php

namespace App\Tools\Exceptions;

class PathException extends \Exception
{
    public function errorMessage(): string
    {
        return 'Path Exception in' . $this->getLine() . ' in file ' . $this->getFile()
            . ': <p>' . $this->getMessage() . '</p> ';
    }
}