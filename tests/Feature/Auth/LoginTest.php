<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_logs_in_with_username_and_password(): void
    {
        User::factory()->create([
            'name' => 'jane_doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('abc12345'),
        ]);

        $response = $this->from('/auth/login')->post('/login', [
            'username' => 'jane_doe',
            'password' => 'abc12345',
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticated();
        $this->assertAuthenticatedAs(User::where('name', 'jane_doe')->firstOrFail());
    }

    public function test_it_rejects_invalid_login_credentials(): void
    {
        User::factory()->create([
            'name' => 'jane_doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('abc12345'),
        ]);

        $response = $this->from('/auth/login')->post('/login', [
            'username' => 'jane_doe',
            'password' => 'wrongpass',
        ]);

        $response->assertRedirect('/auth/login')
            ->assertSessionHasErrors('username');

        $this->assertGuest();
    }
}