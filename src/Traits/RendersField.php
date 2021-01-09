<?php

namespace Eberkund\Larafields\Traits;

use Eberkund\Larafields\Exceptions\InvalidFieldTypeException;

trait RendersField
{
    public function getType(): string
    {
        return $this->type;
    }

    public function view(): string
    {
        switch ($this->getType()) {
            case 'text':
            case 'email':
            case 'date':
            case 'password':
                return 'larafields::text';
            case 'checkbox':
                return 'larafields::checkbox';
            case 'checkbox-group':
                return 'larafields::checkbox-group';
            case 'number':
                return 'larafields::number';
            case 'radio':
                return 'larafields::radio';
            case 'select':
                return 'larafields::select';
            case 'textarea':
                return 'larafields::textarea';
            case 'range':
                return 'larafields::range';
            case 'file':
                return 'larafields::file';
            default:
                throw new InvalidFieldTypeException($this);
        }
    }
}
