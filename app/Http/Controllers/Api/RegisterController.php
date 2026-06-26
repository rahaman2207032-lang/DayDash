<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        try {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
        } catch (QueryException $exception) {
            if ($this->isDuplicateEmailError($exception)) {
                throw ValidationException::withMessages([
                    'email' => __('The email has already been taken.'),
                ]);
            }

            throw $exception;
        }

        return response()->json([
            'message' => 'Registration successful.',
            'user' => $user,
        ], 201);
    }

    private function isDuplicateEmailError(QueryException $exception): bool
    {
        $message = strtolower($exception->getMessage());

        return $exception->getCode() === '23000'
            && (
                str_contains($message, 'users_email_unique')
                || str_contains($message, 'duplicate entry')
                || str_contains($message, 'unique constraint failed: users.email')
            );
    }
}