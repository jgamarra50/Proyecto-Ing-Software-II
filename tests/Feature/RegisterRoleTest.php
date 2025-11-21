<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_always_assigns_user_role(): void
    {
        $response = $this->post('/register', [
            'name' => 'Nuevo Usuario',
            'email' => 'nuevo@example.com',
            'password' => 'Password1',
            'password_confirmation' => 'Password1',
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', [
            'email' => 'nuevo@example.com',
            'role' => 'user',
        ]);

        $user = User::where('email', 'nuevo@example.com')->firstOrFail();
        $this->assertTrue($user->hasRole('user'));
    }

    public function test_cannot_register_admin_via_ui(): void
    {
        $response = $this->post('/register', [
            'name' => 'Intento Admin',
            'email' => 'intento-admin@example.com',
            'password' => 'Password1',
            'password_confirmation' => 'Password1',
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', [
            'email' => 'intento-admin@example.com',
            'role' => 'user',
        ]);

        $user = User::where('email', 'intento-admin@example.com')->firstOrFail();
        $this->assertTrue($user->hasRole('user'));
    }
}