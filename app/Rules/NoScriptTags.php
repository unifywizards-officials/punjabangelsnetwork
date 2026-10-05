<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoScriptTags implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        // Check if the value contains script or anchor tags
        //    return !preg_match('/<script|<a |[\$\(\)"\'{}\[\];:*%\/!@^&=]/i', $value);
        //    return !preg_match('/[<>]|<script|[\.,]/i', $value);
           return !preg_match('/[<>]|<script|[\!@#$%^&?*()\[\]{}|:;"\']/', $value);
    }

    public function message()
    {
        return 'The :attribute field cannot contain script or anchor tags or any other special characters';
    }
}
