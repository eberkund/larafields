<?php

namespace Eberkund\Larafields\Exceptions;

use Exception;

class InvalidFieldTypeException extends Exception
{
    public function __construct()
    {
        $message = 'The type is not a valid field.';

        parent::__construct($message, 0, null);
    }
}
