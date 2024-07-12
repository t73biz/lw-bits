<?php

namespace T73biz\LwBits\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MediaQuery implements ValidationRule
{
    /**
     * Determine if the validation rule passes.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $regex = '/.*\b(all|print|screen)\b.*/';
        if (! preg_match($regex, $value)) {
            $fail('The media attribute must be a valid media query.');
        }
    }
}
