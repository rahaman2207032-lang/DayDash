<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_creates_a_user_from_the_register_page(): void
    {
        $response = $this->from('/auth/register')->post('/register', [
            'username' => 'jane_doe',
            'email' => 'jane@example.com',
            'password' => 'abc12345',
        ]);

        $response->assertRedirect('/auth/login');
        $this->assertDatabaseHas('users', [
            'name' => 'jane_doe',
            'email' => 'jane@example.com',
        ]);

        $user = User::where('email', 'jane@example.com')->firstOrFail();
        $this->assertTrue(Hash::check('abc12345', $user->password));
    }

    public function test_it_rejects_duplicate_username_and_email(): void
    {
        User::factory()->create([
            'name' => 'jane_doe',
            'email' => 'jane@example.com',
        ]);

        $response = $this->from('/auth/register')->post('/register', [
            'username' => 'jane_doe',
            'email' => 'jane@example.com',
            'password' => 'abc12345',
        ]);

        $response->assertRedirect('/auth/register')
            ->assertSessionHasErrors(['username', 'email']);
    }

    public function test_it_rejects_weak_passwords(): void
    {
        $response = $this->from('/auth/register')->post('/register', [
            'username' => 'jane_doe',
            'email' => 'jane@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/auth/register')
            ->assertSessionHasErrors('password');
    }
}