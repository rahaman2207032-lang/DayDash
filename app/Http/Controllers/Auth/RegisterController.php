<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,name'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[A-Za-z])(?=.*\d).+$/',
            ],
        ], [
            'password.regex' => 'The password must contain at least one letter and one number.',
        ]);

        try {
            User::create([
                'name' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
        } catch (QueryException $exception) {
            if ($this->isDuplicateUserError($exception)) {
                throw ValidationException::withMessages([
                    'username' => __('The username has already been taken.'),
                    'email' => __('The email has already been taken.'),
                ]);
            }

            throw $exception;
        }

        return redirect('/auth/login')->with('success', 'Account created successfully.');
    }

    private function isDuplicateUserError(QueryException $exception): bool
    {
        $message = strtolower($exception->getMessage());

        return $exception->getCode() === '23000'
            && (
                str_contains($message, 'users_name_unique')
                || str_contains($message, 'users_email_unique')
                || str_contains($message, 'duplicate entry')
                || str_contains($message, 'unique constraint failed')
            );
    }
}