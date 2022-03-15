<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Jissyu4_3Myrule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
   

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z0-9]+$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'ログインIDは半角英数字で入力してください';
    }
}
