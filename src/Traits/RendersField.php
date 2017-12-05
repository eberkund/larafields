<?php

namespace Eberkund\Larafields\Traits;

use Eberkund\Larafields\Exceptions\InvalidFieldTypeException;

trait RendersField
{
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     * @throws InvalidFieldTypeException
     */
    public function view()
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
            default:
                throw new InvalidFieldTypeException($this);
        }
    }
}
