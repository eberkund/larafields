<?php

namespace Eberkund\Larafields\Rules;

use Illuminate\Contracts\Validation\Rule;
use JsonSchema\Constraints\Constraint;
use JsonSchema\Validator;

class FieldRule implements Rule
{
    private Validator $validator;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->validator = new Validator();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $data = json_decode(file_get_contents('data.json'));

        // Validate
        $this->validator->validate($data, (object)[
            '$ref' => 'file://' . realpath('schema.json')
        ], Constraint::CHECK_MODE_COERCE_TYPES);

        return $this->validator->isValid();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
