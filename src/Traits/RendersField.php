<?php

namespace Eberkund\Larafields\Traits;

use Eberkund\Larafields\Exceptions\InvalidFieldTypeException;

trait RendersField
{
    /**
     * @return string
     * @throws InvalidFieldTypeException
     */
    public function view()
    {
        switch ($this->type) {
            case 'text':
            case 'email':
            case 'date':
            case 'password':
                return 'larafields::text';
            case 'checkbox':
                return 'larafields::checkbox';
            case 'number':
                return 'larafields::number';
            case 'radio':
                return 'larafields::radio';
            case 'select':
                return 'larafields::select';
            case 'textarea':
                return 'larafields::textarea';
            default:
                throw new InvalidFieldTypeException;
        }
    }
}
