<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
<<<<<<< HEAD
        return ['required', 'string', new Password, 'confirmed'];
=======
        return ['required', 'string', new Password,];
>>>>>>> 9e9673466a2d2f7048b22364b484d503fcb30e1a
    }
}
