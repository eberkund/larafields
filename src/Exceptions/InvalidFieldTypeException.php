<?php

namespace Eberkund\Larafields\Exceptions;

use Eberkund\Larafields\Contracts\RenderableField;
use Eberkund\Larafields\Traits\RendersField;
use Exception;

class InvalidFieldTypeException extends Exception
{
    public function __construct(RenderableField $field)
    {
        $message = "{$field->getType()} is not a valid field.";

        parent::__construct($message, 0, null);
    }
}
