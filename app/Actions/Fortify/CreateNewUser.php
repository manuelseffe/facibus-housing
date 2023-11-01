<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
<<<<<<< HEAD
        $name = $input['first_name'] . ' '. $input['last_name'];

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
=======
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
>>>>>>> 9e9673466a2d2f7048b22364b484d503fcb30e1a
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
<<<<<<< HEAD
            'password_confirmation' => ['required','string', 'min:8', 'confirmed'], 
        ])->validate();

        return User::create([
            'name' => $name,
=======
        ])->validate();

        return User::create([
            'first_name' => $input['firstname'],
            'last_name' => $input['lastname'],
>>>>>>> 9e9673466a2d2f7048b22364b484d503fcb30e1a
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
